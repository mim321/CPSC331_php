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
            for ($mim=1; $mim <= 4; $mim++)
            {
             echo$mim,$mim+4;
                 for ($kajan=1; $kajan <= $mim+4; $kajan++)
                {
                    echo "*";
                }
            echo "\n";
            }
        ?>
    </pre>
</body>