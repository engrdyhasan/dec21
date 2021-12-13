mode 	Description
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


<!-- ========= -->
Filesystem ¶

Introduction
Installing/Configuring
    Requirements
    Installation
    Runtime Configuration
    Resource Types
Predefined Constants
Filesystem Functions
    basename — Returns trailing name component of path
    chgrp — Changes file group
    chmod — Changes file mode
    chown — Changes file owner
    clearstatcache — Clears file status cache
    copy — Copies file
    delete — See unlink or unset
    dirname — Returns a parent directory's path
    disk_free_space — Returns available space on filesystem or disk partition
    disk_total_space — Returns the total size of a filesystem or disk partition
    diskfreespace — Alias of disk_free_space
    fclose — Closes an open file pointer
    fdatasync — Synchronizes data (but not meta-data) to the file
    feof — Tests for end-of-file on a file pointer
    fflush — Flushes the output to a file
    fgetc — Gets character from file pointer
    fgetcsv — Gets line from file pointer and parse for CSV fields
    fgets — Gets line from file pointer
    fgetss — Gets line from file pointer and strip HTML tags
    file_exists — Checks whether a file or directory exists
    file_get_contents — Reads entire file into a string
    file_put_contents — Write data to a file
    file — Reads entire file into an array
    fileatime — Gets last access time of file
    filectime — Gets inode change time of file
    filegroup — Gets file group
    fileinode — Gets file inode
    filemtime — Gets file modification time
    fileowner — Gets file owner
    fileperms — Gets file permissions
    filesize — Gets file size
    filetype — Gets file type
    flock — Portable advisory file locking
    fnmatch — Match filename against a pattern
    fopen — Opens file or URL
    fpassthru — Output all remaining data on a file pointer
    fputcsv — Format line as CSV and write to file pointer
    fputs — Alias of fwrite
    fread — Binary-safe file read
    fscanf — Parses input from a file according to a format
    fseek — Seeks on a file pointer
    fstat — Gets information about a file using an open file pointer
    fsync — Synchronizes changes to the file (including meta-data)
    ftell — Returns the current position of the file read/write pointer
    ftruncate — Truncates a file to a given length
    fwrite — Binary-safe file write
    glob — Find pathnames matching a pattern
    is_dir — Tells whether the filename is a directory
    is_executable — Tells whether the filename is executable
    is_file — Tells whether the filename is a regular file
    is_link — Tells whether the filename is a symbolic link
    is_readable — Tells whether a file exists and is readable
    is_uploaded_file — Tells whether the file was uploaded via HTTP POST
    is_writable — Tells whether the filename is writable
    is_writeable — Alias of is_writable
    lchgrp — Changes group ownership of symlink
    lchown — Changes user ownership of symlink
    link — Create a hard link
    linkinfo — Gets information about a link
    lstat — Gives information about a file or symbolic link
    mkdir — Makes directory
    move_uploaded_file — Moves an uploaded file to a new location
    parse_ini_file — Parse a configuration file
    parse_ini_string — Parse a configuration string
    pathinfo — Returns information about a file path
    pclose — Closes process file pointer
    popen — Opens process file pointer
    readfile — Outputs a file
    readlink — Returns the target of a symbolic link
    realpath_cache_get — Get realpath cache entries
    realpath_cache_size — Get realpath cache size
    realpath — Returns canonicalized absolute pathname
    rename — Renames a file or directory
    rewind — Rewind the position of a file pointer
    rmdir — Removes directory
    set_file_buffer — Alias of stream_set_write_buffer
    stat — Gives information about a file
    symlink — Creates a symbolic link
    tempnam — Create file with unique file name
    tmpfile — Creates a temporary file
    touch — Sets access and modification time of file
    umask — Changes the current umask
    unlink — Deletes a file