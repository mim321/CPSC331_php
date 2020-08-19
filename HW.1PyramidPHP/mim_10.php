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
                for ($kajan=5; $kajan >= $mim; $kajan--)
                {
                    echo (" ");
                }
                 for ($kajan=1; $kajan <= $mim; $kajan++)
                {
                    echo ($kajan);
                }
                echo (6-$mim);
                for ($kajan=$mim; $kajan >= 1; $kajan--)
                {
                    echo ($kajan);
                }
            
            echo ("\n");
            }
        ?>
    </pre>
</body>