<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smooth</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/smooth.css')); ?>">
    <script defer src=<?php echo e(asset("scripts/smooth.js")); ?>></script>
</head>

<body>
<header>
    <p>Smooth</p>
</header>

<div class="something">
    <nav>
        <button onclick="">Liked songs</button>
        <button onclick="">My playlists</button>
        <button onclick="">Friends</button>
        <button onclick="">Downloads</button>
        <button onclick="">Albums</button>
        <button onclick="">Profile</button>
    </nav>

    <form action="Something.html">
        <h2>New Album</h2>

        <div><label for="albumName">Album Name:</label> <br></div>
        <div><input type="text" id="albumName" name="Album name"> <br></div>

        <div><label for="releaseYear">Release year</label> <br></div>
        <div><input type="text" id="releaseYear" name="Release year"></div>

        <div><label for="artist">Artist</label></div>
        <div>
            <select type="text" id="artist" name="Selected artist">
                <option for="Select">Select</option>
                <option for="Drake">Drake</option>
                <option for="Kendrick">Kendrick</option>
                <option for="Tyler_the_creator">Tyler the creator</option>
                <option for="ASAP">A$AP Rocky</option>
            </select>
        </div>

        <div><label>Type:</label></div>
        <div>
            <input type="radio" id="single" name="Type of release" value="Single">
            <label for="single">Single</label>
            <input type="radio" id="ep" name="Type of release" value="EP">
            <label for="ep">EP</label>
            <input type="radio" id="album" name="Type of release" value="Album">
            <label for="album">Album</label>
        </div>

        <div><label for="description">Description</label></div>
        <div><textarea id="description" name="Description" placeholder="Write here"></textarea></div>

        <div>
            <label for="tracks">Tracks</label> <br>
        </div>

        <div id="tracks">
            <div id="track0">
                <input type="text" id="tracks" name="The track">
            </div>
        </div>


        <div>
            <button type="button" id="addButton">Add +</button>
        </div>

        <div>
            <button id="submitButton">Submit</button>
        </div>

    </form>
</div>

<footer>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus feugiat lacinia felis vel malesuada. Morbi
        cursus posuere cursus. Aliquam ut eros dui. Praesent consequat ligula non sapien pharetra auctor. Aliquam
        vulputate augue id nulla efficitur sodales. Vestibulum est urna, condimentum eget suscipit in, placerat sit amet
        lectus.</p>
</footer>

</body>
</html>
<?php /**PATH /Users/allan/Desktop/noter-uni/3. semester/Web tech/lect4/smooth/resources/views/create.blade.php ENDPATH**/ ?>