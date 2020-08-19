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
            for ($mim=1; $mim <= 7; $mim++)
            {
                 for ($kajan=1; $kajan <= $mim; $kajan++)
                {
                    echo (" ");
                }
                for ($kajan=0; $kajan < 3; $kajan++)
                {
                    echo ($kajan+$mim);
                }
                for ($kajan=0; $kajan <= $mim; $kajan++)
                {
                    echo ("*");
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>