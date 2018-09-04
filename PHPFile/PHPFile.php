<html>
    <body>

        <?php
        
        $file = fopen("PHPFileText.txt", "r") or exit("Unable to open file!");
        /*
         * r	只读。   在文件的开头开始。
         * r+	读/写。  在文件的开头开始。
         * w	只写。   打开并清空文件的内容；如果文件不存在，则创建新文件。
         * w+	读/写。  打开并清空文件的内容；如果文件不存在，则创建新文件。
         * a	追加。   打开并向文件末尾进行写操作，如果文件不存在，则创建新文件。
         * a+	读/追加。通过向文件末尾写内容，来保持文件内容。
         * x	只写。   创建新文件。如果文件已存在，则返回 FALSE 和一个错误。
         * x+	读/写。  创建新文件。如果文件已存在，则返回 FALSE 和一个错误。
         */


        echo 'open file is ' . $file . '<br>';

        echo "<<<<<<<<<<<文件开始>>>>>>>>>>>>>>>" . '<br>';
        
        //feof() 函数检测是否已到达文件末尾（EOF）。
        while (!feof($file)) {
            //fgets() 函数用于从文件中逐行读取文件。在调用该函数之后，文件指针会移动到下一行。
            echo fgets($file) . "<br>";
        }

        fseek($file, 0);

        echo '<br>';

        while (!feof($file)) {
            //fgetc() 函数用于从文件中逐字符地读取文件。在调用该函数之后，文件指针会移动到下一个字节。
            //中文需要三个字节，fgetc()只能一个一个字节的移动，中文下需要注意中文字节需要连续输出
            $ch = fgetc($file);
            $ch .= fgetc($file);
            $ch .= fgetc($file);
            
            var_dump($ch);
            echo '<br>';
            
        }
        echo '<br>';
        if (feof($file))
            echo "<<<<<<<<<<<文件结尾>>>>>>>>>>>>>>>" . '<br>';

        fclose($file); //关闭文件
        

        function autowrap($fontsize, $angle, $fontface, $string, $width) {
            // 参数分别是 字体大小, 角度, 字体名称, 字符串, 预设宽度
            $content = "";
            // 将字符串拆分成一个个单字 保存到数组 letter 中
            preg_match_all("/./u", $string, $arr);
            $letter = $arr[0];
            foreach ($letter as $l) {
                $content .= PHP_EOL;
                $content .= $l;
            }
            return $content;
        }

        $content = file_get_contents('PHPFileText.txt');
        $box = autowrap(16, 0, 'simhei.ttf', $content, 160);

        var_dump($box);
        ?>

    </body>
</html>


<?php
echo '<br><br><br>'
 . 'basename()           返回路径中的文件名部分。' . '<br>'
 . 'chgrp()              改变文件组。' . '<br>'
 . 'chmod()              改变文件模式。' . '<br>'
 . 'chown()              改变文件所有者。' . '<br>'
 . 'clearstatcache()	清除文件状态缓存。' . '<br>'
 . 'copy()               复制文件。' . '<br>'
 . 'delete()             参见 unlink() 或 unset()' . '<br>'
 . 'dirname()            返回路径中的目录名称部分。' . '<br>'
 . 'disk_free_space()	返回目录的可用空间。' . '<br>'
 . 'disk_total_space()	返回一个目录的磁盘总容量。' . '<br>'
 . 'diskfreespace()	disk_free_space() 的别名。' . '<br>'
 . 'fclose()             关闭打开的文件。' . '<br>'
 . 'feof()               测试文件指针是否到了文件末尾。' . '<br>'
 . 'fflush()             向打开的文件刷新缓冲输出。' . '<br>'
 . 'fgetc()              从打开的文件中返回字符。' . '<br>'
 . 'fgetcsv()            从打开的文件中解析一行，校验 CSV 字段。' . '<br>'
 . 'fgets()              从打开的文件中返回一行。' . '<br>'
 . 'fgetss()             从打开的文件中返回一行，并过滤掉 HTML 和 PHP 标签。' . '<br>'
 . 'file()               把文件读入一个数组中。' . '<br>'
 . 'file_exists()	检查文件或目录是否存在。' . '<br>'
 . 'file_get_contents()	把文件读入字符串。' . '<br>'
 . 'file_put_contents()	把字符串写入文件。' . '<br>'
 . 'fileatime()          返回文件的上次访问时间。' . '<br>'
 . 'filectime()          返回文件的上次修改时间。' . '<br>'
 . 'filegroup()          返回文件的组 ID。' . '<br>'
 . 'fileinode()          返回文件的 inode 编号。' . '<br>'
 . 'filemtime()          返回文件内容的上次修改时间。' . '<br>'
 . 'fileowner()          返回文件的用户 ID （所有者）。' . '<br>'
 . 'fileperms()          返回文件的权限。' . '<br>'
 . 'filesize()           返回文件大小。' . '<br>'
 . 'filetype()           返回文件类型。' . '<br>'
 . 'flock()              锁定或释放文件。' . '<br>'
 . 'fnmatch()            根据指定的模式来匹配文件名或字符串。' . '<br>'
 . 'fopen()              打开一个文件或 URL。' . '<br>'
 . 'fpassthru()          从打开的文件中读数据，直到文件末尾（EOF），并向输出缓冲写结果。' . '<br>'
 . 'fputcsv()            把行格式化为 CSV 并写入一个打开的文件中。' . '<br>'
 . 'fputs()              fwrite() 的别名。' . '<br>'
 . 'fread()              读取打开的文件。' . '<br>'
 . 'fscanf()             根据指定的格式对输入进行解析。fseek()	在打开的文件中定位。' . '<br>'
 . 'fstat()              返回关于一个打开的文件的信息。' . '<br>'
 . 'ftell()              返回在打开文件中的当前位置。' . '<br>'
 . 'ftruncate()          把打开文件截断到指定的长度。' . '<br>'
 . 'fwrite()             写入打开的文件。' . '<br>'
 . 'glob()               返回一个包含匹配指定模式的文件名/目录的数组。' . '<br>'
 . 'is_dir()             判断文件是否是一个目录。' . '<br>'
 . 'is_executable()	判断文件是否可执行。' . '<br>'
 . 'is_file()            判断文件是否是常规的文件。' . '<br>'
 . 'is_link()            判断文件是否是连接。' . '<br>'
 . 'is_readable()	判断文件是否可读。' . '<br>'
 . 'is_uploaded_file()	判断文件是否是通过 HTTP POST 上传的。' . '<br>'
 . 'is_writable()	判断文件是否可写。' . '<br>'
 . 'is_writeable()	is_writable() 的别名。' . '<br>'
 . 'lchgrp()             改变符号连接的组所有权。' . '<br>'
 . 'lchown()             改变符号连接的用户所有权。' . '<br>'
 . 'link()               创建一个硬连接。' . '<br>'
 . 'linkinfo()           返回有关一个硬连接的信息。' . '<br>'
 . 'lstat()              返回关于文件或符号连接的信息。' . '<br>'
 . 'mkdir()              创建目录。' . '<br>'
 . 'move_uploaded_file()	把上传的文件移动到新位置。' . '<br>'
 . 'parse_ini_file()	解析一个配置文件。' . '<br>'
 . 'parse_ini_string()	解析一个配置字符串。' . '<br>'
 . 'pathinfo()           返回关于文件路径的信息。' . '<br>'
 . 'pclose()             关闭由 popen() 打开的进程。' . '<br>'
 . 'popen()              打开一个进程。' . '<br>'
 . 'readfile()           读取一个文件，并写入到输出缓冲。' . '<br>'
 . 'readlink()           返回符号连接的目标。' . '<br>'
 . 'realpath()           返回绝对路径名。' . '<br>'
 . 'realpath_cache_get()	返回高速缓存条目。' . '<br>'
 . 'realpath_cache_size()	返回高速缓存大小。' . '<br>'
 . 'rename()             重命名文件或目录。' . '<br>'
 . 'rewind()             倒回文件指针的位置。' . '<br>'
 . 'rmdir()              删除空的目录。' . '<br>'
 . 'set_file_buffer()	设置已打开文件的缓冲大小。' . '<br>'
 . 'stat()               返回关于文件的信息。' . '<br>'
 . 'symlink()            创建符号连接。' . '<br>'
 . 'tempnam()            创建唯一的临时文件。' . '<br>'
 . 'tmpfile()            创建唯一的临时文件。' . '<br>'
 . 'touch()              设置文件的访问和修改时间。' . '<br>'
 . 'umask()              改变文件的文件权限。' . '<br>'
 . 'unlink()             删除文件。';
?>