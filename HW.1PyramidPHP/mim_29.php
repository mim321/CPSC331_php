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
                echo ($mim);
                echo ("*");
                echo ($mim+2);
                for ($kajan=1; $kajan <= $mim+2; $kajan++)
                {
                    echo ("*");
                }  
            echo ("\n");
            }
        ?>
    </pre>
</body>