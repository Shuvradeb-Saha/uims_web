<body>
<h1><?php echo $this->session->userdata('name'); ?></h1>
<div class="table-responsive"><?php if($req != null){ ?>
    <table class="table">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Email</th>
            <th>Designation</th>
            <th>University</th>
            <th>Department</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php $i = 0 ?>
        <?php foreach ($req as $request): ?>
            <tr>
                <td><?php echo ++$i ?></td>
                <td><?php echo $request['name'] ?></td>
                <td><?php echo $request['email'] ?></td>
                <td><?php echo $request['designation'] ?></td>
                <td><?php echo $request['university'] ?></td>
                <td><?php echo $request['department'] ?></td>
                <td><?php echo $request['gender'] ?></td>
                <td>
                    <form method="get"
                          action="<?php echo base_url() ; ?>/admin/authenticate">
                        <input type="submit" name="action" value="Approve" id="btn"
                               class="btn btn-success"/>
                        <input type="submit" name="action" value="Cancel" id="btn"
                               class="btn btn-danger"/>
                        <input type="hidden" name="email"
                               value="<?php echo $request['email']; ?>"/>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php }else{ ?>
            <?php
            echo '<h1> No Request Available </h1>';
        } ?>
        </tbody>
    </table>
</body>