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
                 for ($kajan=0; $kajan < 2 ; $kajan++)
                {
                    echo ($kajan+$mim);
                }
                for ($kajan=4; $kajan >= $mim; $kajan--)
                {
                    echo (" ");
                }
                for ($kajan=4; $kajan >= $mim; $kajan--)
                {
                    echo (" ");
                }
                for ($kajan=1; $kajan < 3; $kajan++)
                {
                    echo ((($mim+1)*2)-($kajan+$mim));
                }
            
            
                echo ("\n");
            }
        ?>
    </pre>
</body>