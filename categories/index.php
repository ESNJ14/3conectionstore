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

		<?php if (isset($_SESSION) && isset($_SESSION['error'])): ?>
		<h3>
			Error: <?= $_SESSION['error'] ?>
		</h3>
		<?php unset($_SESSION['error']); ?>
		<?php endif ?>

		<?php if (isset($_SESSION) && isset($_SESSION['success'])): ?>
		<h3>
			Error: <?= $_SESSION['success'] ?>
		</h3>
		<?php unset($_SESSION['success']); ?>
		<?php endif ?>


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
                 <imput type="hidden" name="id" id="id">

            </fieldset>
        </form>

        <form id="updateForm" action="../app/categoryController.php" method="POST">
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
                 <imput type="hidden" name="id" id="id">

            </fieldset>
        </form>

        <form id="destroyForm" action="../app/categoryController.php" method="POST">
            <imput type="hidden" name="action" value="destroy">
            <imput type="hidden" name="id" id="id_destroy">
        </form>

	</div>

	<script type="text/javascript">
		function edit(id,name,description,status)
		{
			document.getElementById('storeForm').style.display="nome";
			document.getElementById('updateForm').style.display="block";

			document.getElementById('name').value = name;
			document.getElementById('description').value = description;
			document.getElementById('status').value = status;
			document.getElementById('id').value = id;
		}

		function remove(id)
		{
			var confirm= prompt("Si quiere eliminar el registro, escriba: "+ id);
			if(confirm==id)
			{
				document.getElementById('id_destroy').value = id;
				document.getElementById('destroyForm').submit();	

			}
		}

	</script>

</body>

</html>