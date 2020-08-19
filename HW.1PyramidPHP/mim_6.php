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
                for ($kajan=6; $kajan >= $mim; $kajan--)
                {
                    echo (($kajan-1)%2);
                }
                echo (($mim)%2);
                
                for ($kajan=$mim; $kajan <= 6; $kajan++)
                {
                    echo (($kajan-1)%2);
                }
            echo ("\n");
            }
        ?>
    </pre>
</body>
