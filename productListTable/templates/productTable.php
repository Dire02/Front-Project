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
					{$product['title']}
				</td>
				<td>
					{$product['duration']}
				</td>
				<td>
					{$product['price']}
				</td>
				<td>
				<img src =	'{$product['imagesrc']}' class = 'thumbnail'>
				</td>


				<td>

				<a href= '../../editProduct/editProduct_controller.php?id={$product['id']}'><button type='submit' class='btn btn-text'><span> ویرایش</span>
				<i class=' icon fas fa-pen'></i></button></a>

				</td>

				<td>

				<a href='../../phps/DeleteProducts.php?id={$product['id']}'><button type='submit' class='btn btn-filled'><span> حذف</span>
				<i class=' icon fas fa-trash-alt'></i></button></a>

				</td>


				</tr>	
    "
                
?>
    	
				