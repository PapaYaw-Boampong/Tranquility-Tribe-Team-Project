<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <!-- <header>
        <h1>User Profile</h1>
    </header> -->
    <main>
        <div class="profile-info">
            <form id="profile-form" enctype="multipart/form-data">
                <div class="profile-pic-container">
                    <img src="default.webp" alt="Profile Picture">
                </div>
                <input type="file" id="profile-pic" name="profile-pic" accept="image/*">
                <label for="bio" class="bioLabel">Bio:</label>
                <textarea id="bio" name="bio"></textarea>
                <button class="submit" type="submit">Save</button>
            </form>
        </div>
    </main>
    <!-- <footer>
        <p>&copy; 2024 User Profile</p>
    </footer> -->
    <script src="profile.js"></script>
</body>
</html>
