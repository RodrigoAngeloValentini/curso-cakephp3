<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user):?>
        <tr>
            <td><?=$user->id?></td>
            <td><?=$user->name?></td>
            <td><?=$user->username?></td>
            <td><?=$user->email?></td>
            <td>
                <a href="/users/edit/<?=$user->id?>">Edit</a>
                <a href="/users/view/<?=$user->id?>">View</a>
                <form action="/users/delete/<?php echo $user->id;?>" method="POST">
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<a href="/users/add">New</a>