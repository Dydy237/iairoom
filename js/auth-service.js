class AuthService {
    static API_BASE = 'http://localhost:3000/api';

    static async login(email, password, rememberMe = false) {
        try {
            const response = await fetch(`${this.API_BASE}/login`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ email, password }),
            });

            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.message || 'Login failed');
            }

            // Store token and user data
            const storage = rememberMe ? localStorage : sessionStorage;
            storage.setItem('token', data.token);
            storage.setItem('user', JSON.stringify(data.user));

            return { success: true, user: data.user, token: data.token };
        } catch (error) {
            console.error('Login error:', error);
            return { success: false, message: error.message };
        }
    }

    static async register(userData) {
        try {
            // Map frontend data to backend expected format
            const registerData = {
                username: userData.name, // Use name as username
                email: userData.email,
                password: userData.password,
                role: userData.role || 'tenant', // Include role from frontend
                phone: userData.phone, // Include phone from frontend
            };

            // Add property fields for landlords
            if (userData.role === 'landlord') {
                registerData.propertyAddress = userData.propertyAddress;
                registerData.propertyType = userData.propertyType;
                registerData.numRooms = userData.numRooms;
            }

            const response = await fetch(`${this.API_BASE}/register`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(registerData),
            });

            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.message || 'Registration failed');
            }

            return { success: true, userId: data.userId };
        } catch (error) {
            console.error('Registration error:', error);
            return { success: false, message: error.message };
        }
    }

    static logout() {
        localStorage.removeItem('token');
        localStorage.removeItem('user');
        sessionStorage.removeItem('token');
        sessionStorage.removeItem('user');
    }

    static getCurrentUser() {
        const token = localStorage.getItem('token') || sessionStorage.getItem('token');
        const user = localStorage.getItem('user') || sessionStorage.getItem('user');

        if (!token || !user) {
            return { isAuthenticated: false };
        }

        try {
            const userData = JSON.parse(user);
            return { isAuthenticated: true, user: userData, token };
        } catch (error) {
            console.error('Error parsing user data:', error);
            this.logout();
            return { isAuthenticated: false };
        }
    }

    static getToken() {
        return localStorage.getItem('token') || sessionStorage.getItem('token');
    }

    // Helper method to make authenticated requests
    static async authenticatedFetch(url, options = {}) {
        const token = this.getToken();
        if (!token) {
            throw new Error('No authentication token found');
        }

        const headers = {
            ...options.headers,
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json',
        };

        return fetch(url, {
            ...options,
            headers,
        });
    }
}

// Make it globally available
window.AuthService = AuthService;
