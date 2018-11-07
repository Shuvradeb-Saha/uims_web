<html>
<head>

</head>

<body>
    <form method="post" action="<?php echo base_url()?>form/submitted" onsubmit="return test()">
        <input type="text" id="name" name="name">
        <input type="text" id="email" name="email">

        <input type="submit" name="submit">
    </form>
</body>

<script>
    function test() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        //alert("ss");
        newFunc();
        if (name == email){
            alert("same");
            return true;
        }
        else {
            alert("not same");
            return false;
        }
    }
    function newFunc() {
        alert("new called");
    }
</script>
<script>

</script>

</html>