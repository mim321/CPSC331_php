<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:40px;">
        <?php echo "<br/>";
            for ($mim=1; $mim <= 3; $mim++)
            {
                for ($kajan=3; $kajan >= $mim; $kajan--)
                {
                    echo (" ");
                }
                echo ("*");
                for ($kajan=1; $kajan <= $mim; $kajan++)
                {
                    echo ($mim);
                }
                for ($kajan=2; $kajan <= $mim; $kajan++)
                {
                    echo ($mim);
                }
                echo ("*");
                
            echo ("\n");
            }
            for ($mim=1; $mim <= 2; $mim++)
            {
                for ($kajan=1; $kajan <= $mim+1; $kajan++)
                {
                    echo (" ");
                }
                echo ("*");
                for ($kajan=$mim; $kajan <= 2; $kajan++)
                {
                    echo (3-$mim);
                }
                for ($kajan=$mim; $kajan <= 1; $kajan++)
                {
                    echo (3-$mim);
                }
                echo ("*");
            echo ("\n");
            }
        ?>
    </pre>
</body>