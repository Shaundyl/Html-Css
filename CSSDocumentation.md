# CSSGenerator Class 
This class is designed to generate CSS files. It provides methods to add formats and media to the stylesheet and then generate the final CSS code and write it to a file.

## Properties
- `$fileExt` (protected string): Stores the default file extension (.css) for generated files.
- `$fileName` (protected string): Holds the name of the CSS file to be generated (including the extension).
- `$formats` (protected array): Stores instances of the CSSFormat class representing styles.
- `$medias` (protected array): Stores instances of the CSSMedia class representing media queries.
## Methods

`__construct(string $name)` (public): Initializes the CSSGenerator object.
1. Takes a string argument (`$name`) representing the desired filename (without the extension).
2. Sets the `$fileName` property by appending the default file extension.
3. Initializes empty arrays for $formats and $medias.

`addFormat(CSSFormat $format): CSSGenerator` (public): Adds a CSSFormat object to the $formats array.
- Allows chaining by returning the current object ($this).

`addMedia(CSSMedia $media): CSSGenerator` (public): Adds a CSSMedia object to the $medias array.
- Similar to addFormat, it allows chaining.

`generateFile(): CSSGenerator` (public): Generates the final CSS code and writes it to a file.
1. Gets the directory path from the filename.
2. Creates the directory structure if it doesn't exist using mkdir.
3. Opens the file for writing using fopen.
4. Loops through each CSSFormat object in `$formats` and writes its template to the file.
5. Checks for media queries ($medias not empty).
6. Loops through each CSSMedia object:
7. Writes the media query template to the file.
8. Loops through each format within the media query and writes its template.
9. Writes the closing tag for the media query.
10. Closes the file using fclose.
11. Prints a success message and returns the current object ($this), allowing chaining.

---

# CSSFormat Class
This class represents a single CSS style format within a stylesheet. It provides methods to define the selector, set styles (properties and values), retrieve the final template string, and validate its completeness.

## Properties
- `$container` (protected string): This property stores the CSS selector string for the format.
- `$template` (protected string): This property holds the complete template string for the format, including the selector, styles, and closing curly brace.

## Methods
- `__construct(string $selector)` (public): This constructor method initializes the CSSFormat object. It takes a string argument representing the CSS selector and sets the $container property. It also starts building the template string by adding the selector and opening curly brace.

- `set(string $element, string $val): CSSFormat `(public): This method allows setting individual styles (properties and values) for the format. It takes two string arguments: the style element (property) and its corresponding value. It updates the $template string by adding a new line with the element and value separated by a colon and semicolon. The method allows chaining by returning the current object (`$this`).

- `finishTemplate()` (public): This method finalizes the template string by adding the closing curly brace to the $template property.

- `getTemplate(): string` (public): This method retrieves the complete template string for the format, including the selector, all defined styles, and the closing curly brace. It also validates if the template is finished by checking for the presence of the closing curly brace. If not found, it throws an exception.


## Note

- It's recommended to call `finishTemplate` before retrieving the final template using `getTemplate` to ensure proper closure. However, `getTemplate` now enforces this by validating the presence of the closing brace.

---

# CSSMedia Class

This class represents a media query within a CSS stylesheet. It allows defining the media type (screen or not), size limit (min or max width/height), and breakpoint value, and adding styles (formats) specific to that media query.

## Properties
- `$highTemplate` (protected string): This property stores the initial part of the media query template string, including the `@media` keyword, optional screen type declaration, size limit identifier, breakpoint value, opening parenthesis, and opening curly brace.
- `$subFormats` (protected array): This array stores instances of the CSSFormat class representing the styles included within this media query.

## Methods
<ul>
<li>  `__construct(int $px, string $limit, bool $screen)` (public): This constructor method initializes the CSSMedia object. It takes three arguments: </li>

<ol>
<li>

`$px`(int): The breakpoint value in pixels.
 </li>
<li>

`$limit` (string): The size limit identifier (e.g., MAX_WIDTH, min_width). It's case-insensitive. 
</li>
<li>

`$screen` (bool): A flag indicating whether the media query applies to screen media (true) or not (false). The constructor builds the initial template string based on the provided arguments. It performs a case-insensitive comparison for the $limit parameter and throws an exception for invalid input.
</li>
</ol>

<li>  `addFormat(CSSFormat $format): CSSMedia` (public): This method allows adding a `CSSFormat` object to the `$subFormats` array, representing styles specific to this media query. It allows chaining by returning the current object (`$this`).</li>
<li>  `finish()`: (public): This method returns the closing curly brace `}` to be appended to the media query template string.</li>
<li>  `getTemplate(): string` (public): This method retrieves the current media query template string, including the initial part constructed in the constructor and potentially containing styles added through `addFormat`. </li>
<li>  `getFormats(): array` (public): This method returns the array of `CSSFormat` objects stored in `$subFormats`, representing the styles defined within this media query.</li>
</ul>