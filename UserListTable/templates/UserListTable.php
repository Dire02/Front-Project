<?php
echo "
				<tr class = ''>
				<td>
				<input type='checkbox' name = 'row[]'>
				</td>

				<td>
					{$product['id']}
				</td>
				<td>
					{$product['name']}
				</td>
				<td>
					{$product['pass']}
				</td>
				<td>
					{$product['gender']}
				</td>
				<td>
					{$product['email']}
				</td>
				<td>
					{$product['Rolls']}
				</td>

				<td>

				<a href= '../../admin_editProfile/editprofile_controller.php?id={$product['id']}'><button type='submit' class='btn btn-text'><span> ویرایش</span>
				<i class=' icon fas fa-pen'></i></button></a>

				</td>

				<td>

				<a href='../../phps/DeleteProfile.php?id={$product['id']}'><button type='submit' class='btn btn-filled'><span> حذف</span>
				<i class=' icon fas fa-trash-alt'></i></button></a>

				</td>

				</tr>	
    "
                
?>
    	
				