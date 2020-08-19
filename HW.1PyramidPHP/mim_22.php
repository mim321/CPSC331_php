<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp_tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:40px;">
        <?php echo "<br/>";
            for ($mim=1; $mim <= 5; $mim++)
            {
                echo ("*");
                for ($kajan=2; $kajan <= $mim; $kajan++)
                {
                    echo (" ");
                }
                for ($kajan=$mim; $kajan <= 5; $kajan++)
                {
                    echo ($mim);
                }
                for ($kajan=$mim; $kajan <= 4; $kajan++)
                {
                    echo ($mim);
                }
                for ($kajan=2; $kajan <= $mim; $kajan++)
                {
                    echo (" ");
                }
                echo ("*");
            echo ("\n");
            }
        ?>
    </pre>
</body>