
<!--index.php определяет главную страницу, а также будет использоваться в качестве стандартного макета, если определенные файлы шаблонов (например single.php, page.php) не будут найдены.

Мы используем теги шаблонов, чтобы убедиться в том, что коды header (get_header), sidebar (get_sidebar) и footer (get_footer) включены в нашу главную страницу.

Цикл WordPress будет всегда отображать список записей и их выдержки с большим количеством тегов шаблона. Мы также используем семантические элементы HTML5 <section>, <main>, <header> и <article>. Некоторые из наших элементов будут иметь назначенные для них классы, они будут написаны когда мы перейдем к файлу style.css.-->
  <?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-loop">
        <header>
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          Автор: <?php the_author(); ?>
        </header>
        <?php the_excerpt(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Извините, записи не были найдены!</p>
      </article>
<?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>

<!--Цикл начинается с <?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> и заканчивается на <?php //endif; ?>. Внутри цикла используются следующие теги шаблонов:

<?php //the_permalink(); ?> – выводит URL настоящей записи
<?php //the_title_attribute(); ?> – выводит заголовок записи в безопасном формате для атрибута заголовка ссылки
<?php //the_title(); ?> – выводит заголовок записи
<?php //the_author(); ?> – выводит имя автора
<?php //the_excerpt(); ?> – выводит выдержку из записи, которая будет автоматически сгенерирована, если вы не написали свою собственную -->