<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white font-sans">
    @include('layouts.header')

    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-4xl font-bold mb-6">About Us</h1>
        <div class="max-w-4xl text-center mb-10">
            <p class="text-xl mb-4">
                Welcome to our Astronomy Website! This platform has been developed as an educational project with the purpose of studying and researching coding techniques.
            </p>
            <p class="text-xl">
                This website is primarily used for class assignments at Aptech. It aims to enhance our understanding and application of web development in the context of astronomy.
            </p>
        </div>
        <div class="relative w-full max-w-xl h-24 flex flex-col items-center justify-center p-4">
            <div class="text-2xl font-semibold mb-2">Project Contributors</div>
            <div id="team-slider" class="relative w-full flex items-center justify-between">
                <button id="prev" class="text-3xl">&#9664;</button>
                <div id="member-name" class="text-xl font-semibold px-10">Member Name</div>
                <button id="next" class="text-3xl">&#9654;</button>
            </div>
        </div>
    </div>

    <script>
        // Array of team members
        const teamMembers = ["Phạm Hoàng Anh", "Nguyễn Ngọc Phong", "Nguyễn Duy Sơn"];
        let currentIndex = 0;

        function updateMember() {
            $("#member-name").text(teamMembers[currentIndex]);
        }

        $("#next").click(function() {
            currentIndex = (currentIndex + 1) % teamMembers.length;
            updateMember();
        });

        $("#prev").click(function() {
            currentIndex = (currentIndex - 1 + teamMembers.length) % teamMembers.length;
            updateMember();
        });

        // Initialize the first member display
        updateMember();
    </script>

    @include('layouts.footer')
</body>
</html>
