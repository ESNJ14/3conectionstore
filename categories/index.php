<?php 
	
	include "../app/categoryController.php";
	$categoryController = new categoryController();
	$categories = $categoryController -> get();

	#echo json_encode($categories);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Site
		</title>		
	</head>

<body>

	<div>
		<h1>
			Categories
		</h1>

		<table>

			<thead>
					
				<th>
					1					
				</th>

				<th>
					Name:
				</th>

				<th>
					Descripcion
				</th>
		</table>

		<form action="../app/categoryController.php" method="POST">
            <fieldset>

                <legend>
                    Add new Category
                </legend>

                <label>
                    Name
                </label>
                <input type="text"  name="name" placeholder="terror" required=""> 
                <br>

                <label>
                    Description
                </label>
                <textarea placeholder="write here" name="description" rows="5" required=""></textarea>
                <br>

                <label>
                    Status
                </label>
                <select name="status">
                    <option> active </option>
                    <option> inactive </option>
                </select>
                <br>

                <button type="submit" >Save Category</button>
                <imput type="hidden" name="action" value="store">

            </fieldset>
        </form>
        
	</div>

</body>

</html>