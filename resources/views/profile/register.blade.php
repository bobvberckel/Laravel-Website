<h2>Wat is je naam?</h2>
<form action="/profile" method="POST">
	@csrf
	<input type="text" name="username" placeholder="Vul hier je naam in.">
	<input type="submit">
</form>