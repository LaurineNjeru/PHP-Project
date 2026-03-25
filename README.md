# Rectangle Area Calculator in PHP
## 1. Title & Objective
Technology chosen:PHP
Why PHP: It is widely used for server-side scripting and integrate seamlessly with HTML.It's also beginner-friendly and perfect for learning how web applications process input and output.
End Goal: Build a simple web-based calculator that takes user input(length and width) and computes the area of a rectangle.
Learn PHP basics:embedding PHP in HTML, handling forms,performing arithmetic,and displaying results.
## 2: Quick Summary of the Technology
What is PHP: PHP is a server-side scripting language used to build dynamic websites.
Where is it used: It’s used in platforms like WordPress.
Real-world example: Facebook originally used PHP.

## 3. System Requirements
OS: Windows/Mac/Linux
Tools/Editors: VS Code, XAMPP/MAMP
Packages: PHP (bundled with XAMPP/MAMP) no extra installation is  needed.

## 4. Installation & Setup Instructions
1. Install XAMPP from apachefriends.org
2. Start Apache in the control panel
3. Create folder `php_basics` inside `htdocs`
4. Save your file as `rectangle.php`
5. Access via browser: http://localhost/php_basics/rectangle.php

## 5. Minimal Working Example
This program takes user input for length and width, calculates the area , and displays the result.

** Code:**
'''php
<!DOCTYPE html>
<html>
<head>
    <title>Rectangle Area Calculator</title>
</head>
<body>
    <h2>Rectangle Area Calculator</h2>
    <!-- Input form -->
    <form method="post">
        Length: <input type="number" name="length" step="0.01" required><br><br>
        Width: <input type="number" name="width" step="0.01" required><br><br>
        <input type="submit" value="Calculate Area">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = floatval($_POST['length']); // Convert input to number
        $width = floatval($_POST['width']);   // Convert input to number

        $area = $length * $width; // Calculate area

        // Display result
        echo "<h3>Result:</h3>";
        echo "The area of the rectangle is <b>$area</b> square units.";
    }
    ?>
</body>
</html>

Expected Output: 

If the user enters length = 5 and width = 10, the program will output:
The area of the rectangle is 50 square units.

## 6. AI Prompt Journal
### Prompt 1
- **Prompt used:** "Ooh Okay. I would love if you took me through the learning of PHP basics and help me create a simple program that calculates area of a rectangle, give a broad documentation about the program."
- **AI’s response summary:** Provided PHP basics, sample program, and structured documentation.
- **Evaluation:** Very helpful.

### Prompt 2
- **Prompt used:** "First before writing the code what should I do"
- **AI’s response summary:** Explained environment setup, project folder creation, and workflow planning.
- **Evaluation:** Helpful for preparation.

### Prompt 3
- **Prompt used:** "Create a project folder: Inside the htdocs (XAMPP) or Sites (MAMP) directory, create a folder called php_basics. Explain this process in a broad way."
- **AI’s response summary:** Explained why and how to create a project folder with diagrams.
- **Evaluation:** Very clear.

### Prompt 4
- **Prompt used:** "Where should I write the code inside VS or Apache? Should I start the Apache on my XAMPP control panel and browse this link 'http://localhost/php_basics/rectangle.php/' at the same time"
- **AI’s response summary:** Clarified that code is written in VS Code, Apache runs the server, and browser displays output.
- **Evaluation:** Extremely useful.

### Prompt 5
- **Prompt used:** "I should write my code inside the rectangle.php or create another file inside rectangle.php"
- **AI’s response summary:** Explained that code goes inside `rectangle.php`, not another file.
- **Evaluation:** Helpful.

### Prompt 6
- **Prompt used:** "Where should I write the documentation? And how should I write it"
- **AI’s response summary:** Explained documentation should be in a `README.md` file using Markdown.
- **Evaluation:** Very helpful.

### Prompt 7
- **Prompt used:** "I want to write my documentation on my GitHub account and I don't know how to go about it. Explain the detailed process for the execution of the documentation and its preferences."
- **AI’s response summary:** Provided step-by-step GitHub workflow for uploading documentation.
- **Evaluation:** Clear and practical.

### Prompt 8
- **Prompt used:** "Is the README.md in uppercase or lowercase?"
- **AI’s response summary:** Explained convention is uppercase `README.md`.
- **Evaluation:** Helpful.

### Prompt 9
- **Prompt used:** "## 5. Minimal Working Example Describe what the program does. Paste code with inline comments. Show expected output. What should I do?"
- **AI’s response summary:** Explained how to structure Section 5 with description, code block, and expected output.
- **Evaluation:** Very useful.

### Prompt 10
- **Prompt used:** "Include your PHP code inside a Markdown code block (using triple backticks ```). Explain thoroughly. Add comments (//) inside the code to explain each step."
- **AI’s response summary:** Provided a fully commented PHP example inside Markdown.
- **Evaluation:** Excellent.

### Prompt 11
- **Prompt used:** "## 6. AI Prompt Journal Record the prompts you used and how the AI helped. How should I record using a link, bearing in mind the submission is via a link"
- **AI’s response summary:** Explained how to record prompts with links in README.md.
- **Evaluation:** Helpful.

### Prompt 12
- **Prompt used:** "List each prompt you used when asking AI for help. How?"
- **AI’s response summary:** Explained how to list prompts clearly in README.md with summaries.
- **Evaluation:** Very useful.

### Prompt 13
- **Prompt used:** "Generate a link that contains the prompts in this page that I could paste in a submission link"
- **AI’s response summary:** Explained how to create a GitHub repo link containing all prompts in README.md.
- **Evaluation:** Helpful.                     

## 7. Common Issues & Fixes
**Program Error:** "Warning: Undefined array key "Length" in C:\xampp\htdocs\php_basics\rectangle.php on line 16".

The prompt I gave to the AI
""explain the error and its origin and correct the error and why i should correct it"".

Gen AI Response(Fix):
✅ Error explanation (Undefined array key "Length")
Great news: you’ve already fixed the bug!
The error happened because PHP was told to read $_POST['Length'] but the form submitted name="length" (lowercase), so that key did not exist.

Correct fix in rectangle.php
Change:

$_POST['Length'] → $_POST['length']
So code becomes:

$length = floatval($_POST['length']);
$width = floatval($_POST['width']);

💡 Why it matters
Prevents warnings in logs and on screen.
Ensures correct input values used in calculations.
More robust code (don’t rely on missing fields).
Avoids silent logic errors when user submits form.

## 8. References
- PHP Official Docs
- W3Schools PHP Tutorial
- Helpful YouTube videos
