<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The box model</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <main>
        <h1>The box model</h1>
        <form method="post" action="thanks.php">
            <h2>Leave your message</h2>
            <div>
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div>
                <label for="subject">Subject</label>
                <select name="subject" id="subject" required>
                    <option value="">Select a subject</option>
                    <option value="Bug">Bug</option>
                    <option value="Feedback">Feedback</option>
                    <option value="Aide">Aide</option>
                </select>
            </div>
            <div>
                <label for="message">Message</label>
                <textarea id="message" rows="10" name="textarea" required></textarea>
            </div>
            <button type="submit">Submit</button>

            

        </form>
    </main>
    <footer>&copy; Wilder</footer>
</body>

</html>