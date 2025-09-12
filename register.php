<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - KMER ROOM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .register-container {
            max-width: 480px;
            margin: 60px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(44,204,113,0.13);
            padding: 32px 28px 24px 28px;
        }
        .form-title {
            color: #2ecc71;
            font-weight: 700;
            margin-bottom: 24px;
            text-align: center;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2 class="form-title">Register</h2>
        <form id="roleForm">
            <div class="mb-3">
                <label class="form-label">Register as:</label>
                <select class="form-select" id="roleSelect" required>
                    <option value="" disabled selected>Select role</option>
                    <option value="tenant">Tenant</option>
                    <option value="landlord">Landlord</option>
                </select>
            </div>
        </form>
        <form id="landlordForm" class="hidden mt-4">
            <h5 class="mb-3">Landlord Information</h5>
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="fullname" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Property Address</label>
                <input type="text" class="form-control" name="address" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Register as Landlord</button>
        </form>
        <form id="tenantForm" class="hidden mt-4">
            <h5 class="mb-3">Tenant Information</h5>
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="fullname" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register as Tenant</button>
        </form>
    </div>
    <script>
        const roleSelect = document.getElementById('roleSelect');
        const landlordForm = document.getElementById('landlordForm');
        const tenantForm = document.getElementById('tenantForm');

        roleSelect.addEventListener('change', function() {
            if (this.value === 'landlord') {
                landlordForm.classList.remove('hidden');
                tenantForm.classList.add('hidden');
            } else if (this.value === 'tenant') {
                tenantForm.classList.remove('hidden');
                landlordForm.classList.add('hidden');
            } else {
                landlordForm.classList.add('hidden');
                tenantForm.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
