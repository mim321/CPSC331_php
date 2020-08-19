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
            for ($mim=1; $mim <= 4; $mim++){
                for ($kajan=$mim; $kajan <= $mim+2; $kajan++){
                echo $kajan;
               }
               for ($kajan=1; $kajan <= ($mim + 2); $kajan++){
                echo "*";
               }
               echo "<br/>";
               }
        ?>
    </pre>
</body>