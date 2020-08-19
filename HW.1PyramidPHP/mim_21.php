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
                for ($kajan=$mim; $kajan <= 7; $kajan++)
                {
                    echo ("*");
                }
                echo ($mim);
                for ($kajan=1; $kajan <= $mim; $kajan++)
                {
                    echo ("*");
                }
                echo (8-$mim);
            echo ("\n");
            }
        ?>
    </pre>
</body>