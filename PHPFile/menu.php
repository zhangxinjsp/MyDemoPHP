






<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <?php include 'PHPFile/menu.php'; ?>
    
    <body>

        
    
        
        <table border="1">
            <tr>
                <td>row 1, cell 1</td>
                <td>row 1, cell 2</td>
            </tr>
            <tr>
                <td>row 2, cell 1</td>
                <td>row 2, cell 2</td>
            </tr>
        </table>



        <h1 style="font-family:verdana;text-align: center; background-color: yellow; color: green">欢迎访问我们的首页！</h1>
        <div class="menu">
            <?php include 'PHPFile/menu.php'; ?>
        </div>
        <p style="font-family:arial;color:red;font-size:20px;">一段文本。</p>
        <p>一段文本。</p>

        <hr />
        <b>This text is bold</b>
        <br />
        <strong>This text is strong</strong>
        <br />
        <em>This text is emphasized</em>
        <br />
        <i>This text is italic</i>
        <br />
        <small>This text is small</small>
        <br />
        This text contains
        <sub>subscript</sub>
        <br />
        This text contains
        <sup>superscript</sup>
    <big>This text is big</big>
    <br />
    <hr />
    <pre>
这是
预格式文本。
它保留了      空格
和换行。
    </pre>
    <hr />
    <code>Computer code</code>
    <br />
    <kbd>Keyboard input</kbd>
    <br />
    <samp>Sample text</samp>
    <br />
    <var>Computer variable</var>
    <br />
    <tt>Teletype text</tt>
    <br />
    <p>
        <b>注释：</b>这些标签常用于显示计算机/编程代码。
    </p>

    <hr />

    <address>
        Written by <a href="mailto:webmaster@example.com">Donald Duck</a>.<br>
        Visit us at:<br>
        Example.com<br>
        Box 564, Disneyland<br>
        USA
    </address>
    <hr/>
    <abbr title="etcetera">etc.</abbr>
    <br />
    <acronym title="World Wide Web">WWW</acronym>
    <br/>
    <p><dfn title="World Health Organization">WHO</dfn> 成立于 1948 年。</p>
    <br/>
    <p><dfn><abbr title="World Health Organization">WHO</abbr></dfn> 成立于 1948 年。</p>
    <br/>
    <p><dfn>WHO</dfn> World Health Organization 成立于 1948 年。</p>
    <p>在某些浏览器中，当您把鼠标移至缩略词语上时，title 可用于展示表达的完整版本。</p>
    <p>仅对于 IE 5 中的 acronym 元素有效。</p>
    <p>对于 Netscape 6.2 中的 abbr 和 acronym 元素都有效。</p>

    <hr/>
    <p>
        如果您的浏览器支持 bi-directional override (bdo)，下一行会从右向左输出 (rtl)；
    </p>
    <bdo dir="rtl">
        Here is some Hebrew text
    </bdo>

    <hr/>
    这是长的引用：
    <blockquote>
        这是长的引用。这是长的引用。这是长的引用。这是长的引用。这是长的引用。这是长的引用。这是长的引用。这是长的引用。这是长的引用。这是长的引用。这是长的引用。
    </blockquote>
    这是短的引用：
    <q>
        这是短的引用。
    </q>
    <p>
        使用 blockquote 元素的话，浏览器会插入换行和外边距，而 q 元素不会有任何特殊的呈现，只在外围加上引号。
    </p>

    <hr/>
    <p>一打有 <del>二十</del> <ins>十二</ins> 件。</p>
    <p>大多数浏览器会改写为删除文本和下划线文本。</p>
    <p>一些老式的浏览器会把删除文本和下划线文本显示为普通文本。</p>

    <hr/>
    <p><cite>The Scream</cite> by Edward Munch. Painted in 1893.</p>

    <hr/>

    <a href="/example/html/lastpage.html" style="text-decoration:none">
        这是一个链接！
    </a>


    <br /><br /><br /><br /><br /><br />
    <form action="TestHtmlFile/HtmlFile.php" method="post">
        Firstname: <input type="text" name="FirstName" />
        Lastname: <input type="text" name="LastName" />
        Age: <input type="text" name="Age" />
        <input type="submit" />
    </form>
    <br /><br /><br /><br /><br /><br />
    <?php
    ?>

    <img
        src="/i/eg_planets.jpg"
        border="0" usemap="#planetmap"
        alt="Planets" />
    <map name="planetmap" id="planetmap">
        <area
            shape="circle"
            coords="180,139,14"
            href ="/example/html/venus.html"
            target ="_blank"
            alt="Venus" />
        <area
            shape="circle"
            coords="129,161,10"
            href ="/example/html/mercur.html"
            target ="_blank"
            alt="Mercury" />
        <area
            shape="rect"
            coords="0,0,110,260"
            href ="/example/html/sun.html"
            target ="_blank"
            alt="Sun" />
    </map>


</body>
</html>