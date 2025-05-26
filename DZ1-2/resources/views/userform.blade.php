<form action="/store_form" method="POST">
	@csrf
	<p>Имя</p>
	<input name="firstname">
	<p>Фамилия</p>
	<input name="surname">
	<p>E-mail</p>
    <input name="email">
	<p></p>
	<input type="submit">
</form>