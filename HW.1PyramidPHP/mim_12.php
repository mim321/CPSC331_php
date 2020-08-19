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
                for ($kajan=1; $kajan <= $mim; $kajan++)
                {
                    echo (" ");
                }
                 for ($kajan=$mim; $kajan <= 4 ; $kajan++)
                {
                    echo ($kajan);
                }
                echo ("5");
                for ($kajan=4; $kajan >= $mim; $kajan--)
                {
                    echo (10-$kajan);
                }
                echo ("\n");
            }
        ?>
    </pre>
</body>