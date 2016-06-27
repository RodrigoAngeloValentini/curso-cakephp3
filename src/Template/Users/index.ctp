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
                <a href="#">Edit</a>
                <a href="#">Delete</a>
                <a href="#">View</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<a href="">New</a>