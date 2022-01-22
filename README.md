# Movie-Prime-Php-Laravel
<hr>
<p>Проектът има цел да презентира различни видове филми, жанрове и продуценти.</p>

<p>Потребител с който може да се тества проекта:</p>
<li>Email: "admin@admin.admin"; Password: "admin";</li>
<h2>Models</h2>
<hr>

<p>Всяка от изброените таблици има сийд за базата от данни</p>
<ol>
<li>Movies</li>
<ul>
<li>id</li>
<li>movie_name</li>
<li>release_year</li>
<li>language</li>
<li>is_age_restricted</li>
<li>image</li>
</ul>

<li>Genres</li>
<ul>
<li>id</li>
<li>name</li>
</ul>

<li>Producers</li>
<ul>
<li>id</li>
<li>first_name</li>
<li>last_name</li>
<li>age</li>
<li>nationality</li>
<li>image</li>
</ul>

<li>Movie genres </li>
<ul>
<li>id</li>
<li>movie_id</li>
<li>genre_id</li>
</ul>

<li>Movie producers </li>
<ul>
<li>id</li>
<li>movie_id</li>
<li>producer_id</li>
</ul>
</ol>

<h2>Controllers</h2>
<hr>
<p>В админ папката имаме следните контролери, в които стои логиката за CRUD операциите:</p>
<li>MovieCrudController</li>
<li>GenreCrudController</li>
<li>ProducerCrudController</li>

Съшо имаме 
<li>MovieController</li>
<li>GenreController</li>
<li>ProducerController</li>
<p>Тях ги използваме за публичната част да виждаме съдържанието на моделите.</p>
<p>В MovieController има search функция, която ни дава възможност да търсим по име на филм, година на излизане или по име на продуцент.</p>
<h2>Views</h2>
<hr>
<p>View-тата на проекта се намират в resources/views/layouts</p>

<li>movie.blade - показва всичките филми</li>
<li>genre.blade - показва таблица с всичките жанрове </li>
<li>producer.blade - показва всичките продуценти  </li>
<li>search.blade - показва search bar </li>

<p>resources/views/layouts/nav</p>
<li>nav.blade - в този файл стои менюто на сайта, както и всички css и javascript връзки </li>

<p>resources/views/layouts/partial</p>
<p>В тази папка стоят view-тата, когато направиш get by id заявка за филм, жанр или продуцент.</p>

<h2>Routes</h2>
<hr>
<p>Всички публични route-ове са в web.php</p>

<hr>
Темата е изтеглена от: https://html5up.net


