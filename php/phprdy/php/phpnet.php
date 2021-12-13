php.net
PHP: fopen - Manual
23-29 minutes

(PHP 4, PHP 5, PHP 7, PHP 8)

fopen — Opens file or URL
Description ¶

fopen(
    string $filename,
    string $mode,
    bool $use_include_path = false,
    resource $context = ?
): resource
Parameters ¶

filename

    If filename is of the form "scheme://...", it is assumed to be a URL and PHP will search for a protocol handler (also known as a wrapper) for that scheme. If no wrappers for that protocol are registered, PHP will emit a notice to help you track potential problems in your script and then continue as though filename specifies a regular file.

    If PHP has decided that filename specifies a local file, then it will try to open a stream on that file. The file must be accessible to PHP, so you need to ensure that the file access permissions allow this access. If you have enabled open_basedir further restrictions may apply.

    If PHP has decided that filename specifies a registered protocol, and that protocol is registered as a network URL, PHP will check to make sure that allow_url_fopen is enabled. If it is switched off, PHP will emit a warning and the fopen call will fail.

        Note:

        The list of supported protocols can be found in Supported Protocols and Wrappers. Some protocols (also referred to as wrappers) support context and/or php.ini options. Refer to the specific page for the protocol in use for a list of options which can be set. (e.g. php.ini value user_agent used by the http wrapper).

    On the Windows platform, be careful to escape any backslashes used in the path to the file, or use forward slashes.


    <?php
    $handle = fopen("c:\\folder\\resource.txt", "r");
    ?>

mode

    The mode parameter specifies the type of access you require to the stream. It may be any of the following:
    A list of possible modes for fopen() using mode mode 	Description
    'r' 	Open for reading only; place the file pointer at the beginning of the file.
    'r+' 	Open for reading and writing; place the file pointer at the beginning of the file.
    'w' 	Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
    'w+' 	Open for reading and writing; otherwise it has the same behavior as 'w'.
    'a' 	Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() has no effect, writes are always appended.
    'a+' 	Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() only affects the reading position, writes are always appended.
    'x' 	Create and open for writing only; place the file pointer at the beginning of the file. If the file already exists, the fopen() call will fail by returning false and generating an error of level E_WARNING. If the file does not exist, attempt to create it. This is equivalent to specifying O_EXCL|O_CREAT flags for the underlying open(2) system call.
    'x+' 	Create and open for reading and writing; otherwise it has the same behavior as 'x'.
    'c' 	Open the file for writing only. If the file does not exist, it is created. If it exists, it is neither truncated (as opposed to 'w'), nor the call to this function fails (as is the case with 'x'). The file pointer is positioned on the beginning of the file. This may be useful if it's desired to get an advisory lock (see flock()) before attempting to modify the file, as using 'w' could truncate the file before the lock was obtained (if truncation is desired, ftruncate() can be used after the lock is requested).
    'c+' 	Open the file for reading and writing; otherwise it has the same behavior as 'c'.
    'e' 	Set close-on-exec flag on the opened file descriptor. Only available in PHP compiled on POSIX.1-2008 conform systems.

        Note:

        Different operating system families have different line-ending conventions. When you write a text file and want to insert a line break, you need to use the correct line-ending character(s) for your operating system. Unix based systems use \n as the line ending character, Windows based systems use \r\n as the line ending characters and Macintosh based systems (Mac OS Classic) used \r as the line ending character.

        If you use the wrong line ending characters when writing your files, you might find that other applications that open those files will "look funny".

        Windows offers a text-mode translation flag ('t') which will transparently translate \n to \r\n when working with the file. In contrast, you can also use 'b' to force binary mode, which will not translate your data. To use these flags, specify either 'b' or 't' as the last character of the mode parameter.

        The default translation mode is 'b'. You can use the 't' mode if you are working with plain-text files and you use \n to delimit your line endings in your script, but expect your files to be readable with applications such as old versions of notepad. You should use the 'b' in all other cases.

        If you specify the 't' flag when working with binary files, you may experience strange problems with your data, including broken image files and strange problems with \r\n characters.

        Note:

        For portability, it is also strongly recommended that you re-write code that uses or relies upon the 't' mode so that it uses the correct line endings and 'b' mode instead.

use_include_path

    The optional third use_include_path parameter can be set to '1' or true if you want to search for the file in the include_path, too.
context

    A context stream resource.

Return Values ¶

Returns a file pointer resource on success, or false on failure
Errors/Exceptions ¶

Upon failure, an E_WARNING is emitted.
Changelog ¶
Version 	Description
7.0.16, 7.1.2 	The 'e' option was added.
Examples ¶

Example #1 fopen() examples


<?php
$handle = fopen("/home/rasmus/file.txt", "r");
$handle = fopen("/home/rasmus/file.gif", "wb");
$handle = fopen("http://www.example.com/", "r");
$handle = fopen("ftp://user:password@example.com/somefile.txt", "w");
?>

Notes ¶

Warning

When using SSL, Microsoft IIS will violate the protocol by closing the connection without sending a close_notify indicator. PHP will report this as "SSL: Fatal Protocol Error" when you reach the end of the data. To work around this, the value of error_reporting should be lowered to a level that does not include warnings. PHP can detect buggy IIS server software when you open the stream using the https:// wrapper and will suppress the warning. When using fsockopen() to create an ssl:// socket, the developer is responsible for detecting and suppressing this warning.

    Note:

    If you are experiencing problems with reading and writing to files and you're using the server module version of PHP, remember to make sure that the files and directories you're using are accessible to the server process.

    Note:

    This function may also succeed when filename is a directory. If you are unsure whether filename is a file or a directory, you may need to use the is_dir() function before calling fopen().

See Also ¶

    Supported Protocols and Wrappers
    fclose() - Closes an open file pointer
    fgets() - Gets line from file pointer
    fread() - Binary-safe file read
    fwrite() - Binary-safe file write
    fsockopen() - Open Internet or Unix domain socket connection
    file() - Reads entire file into an array
    file_exists() - Checks whether a file or directory exists
    is_readable() - Tells whether a file exists and is readable
    stream_set_timeout() - Set timeout period on a stream
    popen() - Opens process file pointer
    stream_context_create() - Creates a stream context
    umask() - Changes the current umask
    SplFileObject

chapman at worldtakeoverindustries dot com ¶

9 years ago


Note - using fopen in 'w' mode will NOT update the modification time (filemtime) of a file like you may expect. You may want to issue a touch() after writing and closing the file which update its modification time. This may become critical in a caching situation, if you intend to keep your hair.

php-manual at merlindynamics dot com ¶

1 year ago


There is an undocumented mode for making fopen non-blocking (not working on windows). By adding 'n' to the mode parameter, fopen will not block, however if the pipe does not exist an error will be raised.

$fp = fopen("/tmp/debug", "a"); //blocks if pipe does not exist

$fp = fopen("/tmp/debug", "an"); //raises error on pipe not exist

php at delhelsa dot com ¶

13 years ago


With php 5.2.5 on Apache 2.2.4, accessing files on an ftp server with fopen() or readfile() requires an extra forwardslash if an absolute path is needed.


i.e., if a file called bullbes.txt is stored under /var/school/ on ftp server example.com and you're trying to access it with user blossom and password buttercup, the url would be:


ftp://blossom:buttercup@example.com//var/school/bubbles.txt


Note the two forwardslashes. It looks like the second one is needed so the server won't interpret the path as relative to blossom's home on townsville.

petepostma-deletethis at gmail dot com ¶

4 years ago


The verbal descriptions take a while to read through to get a feel for the expected results for fopen modes. This csv table can help break it down for quicker understanding to find which mode you are looking for:

Mode,Creates,Reads,Writes,Pointer Starts,Truncates File,Notes,Purpose
r,,y,,beginning,,fails if file doesn't exist,basic read existing file
r+,,y,y,beginning,,fails if file doesn't exist,basic r/w existing file
w,y,,y,beginning+end,y,,"create, erase, write file"
w+,y,y,y,beginning+end,y,,"create, erase, write file with read option"
a,y,,y,end,,,"write from end of file, create if needed"
a+,y,y,y,end,,,"write from end of file, create if needed, with read options"
x,y,,y,beginning,,fails if file exists,"like w, but prevents over-writing an existing file"
x+,y,y,y,beginning,,fails if file exists,"like w+, but prevents over writing an existing file"
c,y,,y,beginning,,,open/create a file for writing without deleting current content
c+,y,y,y,beginning,,,"open/create a file that is read, and then written back down"

Anon. ¶

1 year ago


/***** GENTLE REMINDER *****/
Really important. Do NOT use the "w" flag unless you want to delete everything in the file.

ideacode ¶

16 years ago


Note that whether you may open directories is operating system dependent. The following lines:

<?php
// Windows ($fh === false)
$fh = fopen('c:\\Temp', 'r');// UNIX (is_resource($fh) === true)
$fh = fopen('/tmp', 'r');
?>

demonstrate that on Windows (2000, probably XP) you may not open a directory (the error is "Permission Denied"), regardless of the security permissions on that directory.

On UNIX, you may happily read the directory format for the native filesystem.

info at b1g dot de ¶

16 years ago


Simple class to fetch a HTTP URL. Supports "Location:"-redirections. Useful for servers with allow_url_fopen=false. Works with SSL-secured hosts.


<?php

#usage:

$r = new HTTPRequest('http://www.example.com');

echo $r->DownloadToString();


class 
HTTPRequest

{

    var $_fp;        // HTTP socket

    var $_url;        // full URL

    var $_host;        // HTTP host

    var $_protocol;    // protocol (HTTP/HTTPS)

    var $_uri;        // request URI

    var $_port;        // port

    
    // scan url
function _scan_url()

    {

        $req = $this->_url;
$pos = strpos($req, '://');

        $this->_protocol = strtolower(substr($req, 0, $pos));
$req = substr($req, $pos+3);

        $pos = strpos($req, '/');

        if($pos === false)

            $pos = strlen($req);

        $host = substr($req, 0, $pos);

        
        if(
strpos($host, ':') !== false)

        {

            list($this->_host, $this->_port) = explode(':', $host);

        }

        else 

        {

            $this->_host = $host;

            $this->_port = ($this->_protocol == 'https') ? 443 : 80;

        }
$this->_uri = substr($req, $pos);

        if($this->_uri == '')

            $this->_uri = '/';

    }
// constructor

    function HTTPRequest($url)

    {

        $this->_url = $url;

        $this->_scan_url();

    }
// download URL to string

    function DownloadToString()

    {

        $crlf = "\r\n";
// generate request

        $req = 'GET ' . $this->_uri . ' HTTP/1.0' . $crlf

            .    'Host: ' . $this->_host . $crlf

            .    $crlf;
// fetch

        $this->_fp = fsockopen(($this->_protocol == 'https' ? 'ssl://' : '') . $this->_host, $this->_port);

        fwrite($this->_fp, $req);

        while(is_resource($this->_fp) && $this->_fp && !feof($this->_fp))

            $response .= fread($this->_fp, 1024);

        fclose($this->_fp);
// split header and body

        $pos = strpos($response, $crlf . $crlf);

        if($pos === false)

            return($response);

        $header = substr($response, 0, $pos);

        $body = substr($response, $pos + 2 * strlen($crlf));
// parse headers

        $headers = array();

        $lines = explode($crlf, $header);

        foreach($lines as $line)

            if(($pos = strpos($line, ':')) !== false)

                $headers[strtolower(trim(substr($line, 0, $pos)))] = trim(substr($line, $pos+1));
// redirection?

        if(isset($headers['location']))

        {

            $http = new HTTPRequest($headers['location']);

            return($http->DownloadToString($http));

        }

        else 

        {

            return($body);

        }

    }

}

?>


durwood at speakeasy dot NOSPAM dot net ¶

16 years ago


I couldn't for the life of me get a certain php script working when i moved my server to a new Fedora 4 installation. The problem was that fopen() was failing when trying to access a file as a URL through apache -- even though it worked fine when run from the shell and even though the file was readily readable from any browser.  After trying to place blame on Apache, RedHat, and even my cat and dog, I finally ran across this bug report on Redhat's website:

https://bugzilla.redhat.com/bugzilla/show_bug.cgi?id=164700

Basically the problem was SELinux (which I knew nothing about) -- you have to run the following command in order for SELinux to allow php to open a web file:

/usr/sbin/setsebool httpd_can_network_connect=1

To make the change permanent, run it with the -P option:

/usr/sbin/setsebool -P httpd_can_network_connect=1

Hope this helps others out -- it sure took me a long time to track down the problem.

php at richardneill dot org ¶

10 years ago


fopen() will block if the file to be opened is a fifo. This is true whether it's opened in "r" or "w" mode.  (See man 7 fifo: this is the correct, default behaviour; although Linux supports non-blocking fopen() of a fifo, PHP doesn't).
The consequence of this is that you can't discover whether an initial fifo read/write would block because to do that you need stream_select(), which in turn requires that fopen() has happened!

etters dot ayoub at gmail dot com ¶

3 years ago


This functions check recursive permissions and recursive existence parent folders, before creating a folder. To avoid the generation of errors/warnings. 

/**
 * This functions check recursive permissions and recursive existence parent folders,
 * before creating a folder. To avoid the generation of errors/warnings. 
 *
 * @return bool
 *     true folder has been created or exist and writable. 
 *     False folder not exist and cannot be created. 
 */
function createWritableFolder($folder)
{
    if (file_exists($folder)) {
        // Folder exist.
        return is_writable($folder);
    }
    // Folder not exit, check parent folder.
    $folderParent = dirname($folder);
    if($folderParent != '.' && $folderParent != '/' ) {
        if(!createWritableFolder(dirname($folder))) {
            // Failed to create folder parent.
            return false;
        }
        // Folder parent created.
    }

    if ( is_writable($folderParent) ) {
        // Folder parent is writable.
        if ( mkdir($folder, 0777, true) ) {
            // Folder created.
            return true;
        }
        // Failed to create folder.
    }
    // Folder parent is not writable.
    return false;
}

/**
 * This functions check recursive permissions and recursive existence parent folders,
 * before creating a file/folder. To avoid the generation of errors/warnings. 
 *
 * @return bool
 *     true has been created or file exist and writable. 
 *     False file not exist and cannot be created. 
 */
function createWritableFile($file)
{
    // Check if conf file exist.
    if (file_exists($file)) {
        // check if conf file is writable.
        return is_writable($file);
    }

    // Check if conf folder exist and try to create conf file.
    if(createWritableFolder(dirname($file)) && ($handle = fopen($file, 'a'))) {
        fclose($handle);
        return true; // File conf created.
    }
    // Inaccessible conf file.
    return false;
}

ceo at l-i-e dot com ¶

15 years ago


If you need fopen() on a URL to timeout, you can do like:
<?php
  $timeout = 3;
  $old = ini_set('default_socket_timeout', $timeout);
  $file = fopen('http://example.com', 'r');
  ini_set('default_socket_timeout', $old);
  stream_set_timeout($file, $timeout);
  stream_set_blocking($file, 0);
  //the rest is standard
?>

splogamurugan at gmail dot com ¶

10 years ago


While opening a file with multibyte data (Ex: données multi-octets), faced some issues with the encoding. Got to know that it uses  windows-1250. Used iconv to convert it to UTF-8 and it resolved the issue.  


<?php

function utf8_fopen_read($fileName) {

    $fc = iconv('windows-1250', 'utf-8', file_get_contents($fileName)); 

    $handle=fopen("php://memory", "rw");

    fwrite($handle, $fc); 

    fseek($handle, 0); 

    return $handle;

}

?>



Example usage:


<?php

$fh = utf8_fopen_read("./tpKpiBundle.csv");

while (($data = fgetcsv($fh, 1000, ",")) !== false) {

    foreach ($data as $value) {

        echo $value . "<br />\n";

    }

}

?>



Hope it helps.

ken dot gregg at rwre dot com ¶

17 years ago


PHP will open a directory if a path with no file name is supplied. This just bit me. I was not checking the filename part of a concatenated string.


For example:


<?php

$fd = fopen('/home/mydir/' . $somefile, 'r');

?>



Will open the directory if $somefile = ''


If you attempt to read using the file handle you will get the binary directory contents. I tried append mode and it errors out so does not seem to be dangerous.


This is with FreeBSD 4.5 and PHP 4.3.1. Behaves the same on 4.1.1 and PHP 4.1.2. I have not tested other version/os combinations.

keithm at aoeex dot NOSPAM dot com ¶

20 years ago


I was working on a consol script for win32 and noticed a few things about it.  On win32 it appears that you can't re-open the input stream for reading, but rather you have to open it once, and read from there on.  Also, i don't know if this is a bug or what but it appears that fgets() reads until the new line anyway.  The number of characters returned is ok, but it will not halt reading and return to the script.  I don't know of a work around for this right now, but i'll keep working on it.


This is some code to work around the close and re-open of stdin.


<?php

function read($length='255'){

    if (!isset($GLOBALS['StdinPointer'])){

        $GLOBALS['StdinPointer']=fopen("php://stdin","r");

    }

    $line=fgets($GLOBALS['StdinPointer'],$length);

    return trim($line);

}

echo "Enter your name: ";

$name=read();

echo "Enter your age: ";

$age=read();

echo "Hi $name, Isn't it Great to be $age years old?";

@fclose($StdinPointer);

?>

apathetic012 at gmail dot com ¶

9 years ago


a variable $http_response_header is available when doing the fopen(). Which contains an array of the response header.

dan at cleandns dot com ¶

17 years ago


<?php
#going to update last users counter script since
#aborting a write because a file is locked is not correct.$counter_file = '/tmp/counter.txt';
clearstatcache();
ignore_user_abort(true);     ## prevent refresh from aborting file operations and hosing file
if (file_exists($counter_file)) {
   $fh = fopen($counter_file, 'r+');
    while(1) {
      if (flock($fh, LOCK_EX)) {
         #$buffer = chop(fgets($fh, 2));
         $buffer = chop(fread($fh, filesize($counter_file)));
         $buffer++;
         rewind($fh);
         fwrite($fh, $buffer);
         fflush($fh);
         ftruncate($fh, ftell($fh));     
         flock($fh, LOCK_UN);
         break;
      }
   }
}
else {
   $fh = fopen($counter_file, 'w+');
   fwrite($fh, "1");
   $buffer="1";
}
fclose($fh);

print 
"Count is $buffer";?>

flobee ¶

15 years ago


download: i need a function to simulate a "wget url" and do not buffer the data in the memory to avoid thouse problems on large files:
<?php
function download($file_source, $file_target) {
        $rh = fopen($file_source, 'rb');
        $wh = fopen($file_target, 'wb');
        if ($rh===false || $wh===false) {
// error reading or opening file
           return true;
        }
        while (!feof($rh)) {
            if (fwrite($wh, fread($rh, 1024)) === FALSE) {
                   // 'Download error: Cannot write to file ('.$file_target.')';
                   return true;
               }
        }
        fclose($rh);
        fclose($wh);
        // No error
        return false;
    }
?>

k-gun at git dot io ¶

2 years ago


Seems not documented here but keep in mind, when $filename contains null byte (\0) then a TypeError will be thrown with message such;

TypeError: fopen() expects parameter 1 to be a valid path, string given in ...

kasper at webmasteren dot eu ¶

9 years ago


"Do not use the following reserved device names for the name of a file:
CON, PRN, AUX, NUL, COM1, COM2, COM3, COM4, COM5, COM6, COM7, COM8, COM9, LPT1, 
LPT2, LPT3, LPT4, LPT5, LPT6, LPT7, LPT8, and LPT9. Also avoid these names 
followed immediately by an extension; for example, NUL.txt is not recommended. 
For more information, see Namespaces"
it is a windows limitation.
see:
http://msdn.microsoft.com/en-us/library/windows/desktop/aa365247(v=vs.85).aspx

sean downey ¶

13 years ago


when using ssl / https on windows i would get the error:

"Warning: fopen(https://example.com): failed to open stream: Invalid argument in someSpecialFile.php on line 4344534"


This was because I did not have the extension "php_openssl.dll" enabled.


So if you have the same problem, goto your php.ini file and enable it :)

