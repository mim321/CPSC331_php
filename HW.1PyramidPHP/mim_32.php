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
                for ($kajan=7; $kajan >= $mim; $kajan--)
                {
                    echo (8-$kajan);
                }
                for ($kajan=1; $kajan <= $mim+2; $kajan++)
                {
                    echo ("*");
                }
                echo ($mim+2) ;  
            echo ("\n");
            }
        ?>
    </pre>
</body>