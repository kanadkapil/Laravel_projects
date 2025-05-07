<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body class="">
    <div class="container">
        <h2>User Information Form</h2>
        <form action="adduser" method="post">
            @csrf
            <!-- Name -->
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" value=""><br><br>

            <!-- Age -->
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="" min="1" max="100"><br><br>

            <!-- Gender (Radio Buttons) -->
            <label>Gender:</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br><br>

            <!-- Skills (Checkboxes) -->
            <label>Skills:</label><br>
            <input type="checkbox" id="html" name="skills[]" value="HTML">
            <label for="html">HTML</label><br>
            <input type="checkbox" id="css" name="skills[]" value="CSS">
            <label for="css">CSS</label><br>
            <input type="checkbox" id="js" name="skills[]" value="JavaScript">
            <label for="js">JavaScript</label><br><br>

            <!-- City (Dropdown Select) -->
            <label for="city">City:</label>
            <select id="city" name="city">
                <option value="newyork">New York</option>
                <option value="losangeles">Los Angeles</option>
                <option value="chicago">Chicago</option>
                <option value="houston">Houston</option>
            </select><br><br>

            <!-- Age Range (Input Range) -->
            <label for="ageRange">Age Range:</label>
            <input type="range" id="ageRange" name="ageRange" min="10" max="100"><br><br>

            <!-- Submit -->
            {{-- <input type="submit" value="Submit"> --}}
            <button type="submit">Add New User</button>
        </form>
    </div>
</body>

</html>
