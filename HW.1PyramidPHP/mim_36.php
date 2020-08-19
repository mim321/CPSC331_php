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
            for ($mim=1; $mim <= 3; $mim++)
            {
                for ($kajan=$mim; $kajan <= 3; $kajan++)
                {
                   echo ($kajan);
                }
                for ($kajan=1; $kajan <= $mim; $kajan++)
                {
                   echo ("*");
                }
                for ($kajan=2; $kajan <= $mim; $kajan++)
                {
                   echo ("*");
                }
                for ($kajan=3; $kajan >= $mim; $kajan--)
                {
                   echo ($kajan);
                }
                
           echo ("\n");
            }
            for ($mim=2; $mim <= 3; $mim++)
            {
                for ($kajan=1; $kajan <= $mim; $kajan++)
                {
                   echo (4-(4-$kajan));
                }
                for ($kajan=$mim; $kajan <= 3; $kajan++)
                {
                   echo ("*");
                }
                for ($kajan=$mim; $kajan <= 2; $kajan++)
                {
                   echo ("*");
                }
                for ($kajan=1; $kajan <= $mim; $kajan++)
                {
                   echo (4-$kajan);
                }
           echo ("\n");
            }
        ?>
    </pre>
</body>