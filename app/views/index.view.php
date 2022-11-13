<?php
require 'partials/head.php';?>
<form method="POST" action="/new-todo" class="flex justify-center items-center">
    <label for="todo" class=" ">Add ToDo: </label>
    <input name="todo" class="text-slate-800 p-2 rounded mx-2 focus-within:bg-slate-800 focus:text-slate-50">
    <button class="px-4 py-2 uppercase border border-2 rounded-2xl hover:text-slate-900 hover:bg-slate-50 border-slate-50 hover:border-slate-500">Submit</button>
</form>
<?php
require 'partials/footer.php'?>