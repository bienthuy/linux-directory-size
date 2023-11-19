<h3>Linux Directory Size</h3>
<strong>PHP Script Get Directory Size </strong> <br>
<p>This script will traverse through a specified directory and its subdirectories, listing all files and folders in a tree-like structure. For each file, it will also display the file size. It will also display the total size of a directory.&nbsp;</p>


<h2>How to find size of directory and files</h2>
<p>This is a code to check directory size, file size, and list all information in a tree-like list. You just need to upload it to a host that supports PHP language from 7.x onwards and it will run and display information when you request. It will search all directories and files at the same level with it and subdirectories, files in subdirectories&hellip;</p>

<p>For example, if you use shared hosting and want to check which directory or file is the heaviest, you can upload it inside the public_html directory, suppose it is located at <code class="language-php">/home/bienthuywebsite/public_html/check_folder_size.php </code>and your domain is <a href="https://bienthuy.com" target="_blank">https://bienthuy.com</a> then you just need to access the browser and enter the address <a href="https://bienthuy.com/check_folder_size.php" target="_blank">https://bienthuy.com/check_folder_size.php</a> The result will appear as shown in the image below.</p>

<p>&nbsp;</p>

<img src="https://bienthuy.com/bienthuy-img/check-folder-size-min.jpg" alt="php script get directory size">

<h2>List files in a directory with size</h2>
<p>The functionality of this script can be broken down as follows:</p>

<ol>
	<li>
	<p><strong>Directory Traversal</strong>: The script starts at a specified root directory. It then recursively explores each subdirectory, going as deep as the directory structure allows.</p>
	</li>
	<li>
	<p><strong>List files in a directory with size</strong>: For each directory it visits, the script lists all files contained within. It does this by reading the contents of the directory and filtering out any entries that are files.</p>
	</li>
	<li>
	<p><strong>Show directory and file size</strong>: For each file and directory it finds, the script calculates the size and showing it. This is typically done by reading the file&rsquo;s metadata, which contains information about the file size.</p>
	</li>
	<li>
	<p><strong>List all directory and files in Tree-like Display</strong>: The script keeps track of the current depth in the directory structure (i.e., how many directories deep it is from the root). It uses this information to prefix each file or directory name with a series of indents or other symbols (like&nbsp;<code>|-</code>&nbsp;or&nbsp;<code>├──</code>), creating a visual representation of the directory tree.</p>
	</li>
	<li>
	<p><strong>Output</strong>: The script outputs the directory tree, with each file or directory on a new line. Each line includes the file or directory name, along with the file size for files.</p>
	</li>
</ol>
<p>This script is a handy tool for getting a quick overview of the structure and contents of a directory. It&rsquo;s particularly useful for large directories where manually checking each file would be time-consuming. It can also be used as a basis for more complex scripts that need to perform operations on each file in a directory.</p>
<br> 
Find us on Facebook: https://www.facebook.com/bienthuywebsite  <br>

Find us on Twitter: https://twitter.com/bienthuywebsite  <br>

Find us on Google Plus: http://plus.google.com/+bienthuywebsite  <br>

Find us on Pinterest: https://www.pinterest.com/bienthuywebsite  <br>

Find us on Youtube: https://www.youtube.com/bienthuywebsite  <br>
