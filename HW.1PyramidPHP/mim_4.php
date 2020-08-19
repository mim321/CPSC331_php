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
            for ($mim=1; $mim <= 4 ; $mim++)
            {
             
                 for ($kajan=1; $kajan <= $mim; $kajan++)
                {
                    echo "*";
                }
                 for ($kajan=$mim; $kajan >= 2; $kajan--)
                {
                    echo $kajan;
                }
                for ($kajan=1; $kajan <= $mim; $kajan++)
                {
                    echo $kajan;
                }
            echo "\n";
            }
        ?>
    </pre>
</body>