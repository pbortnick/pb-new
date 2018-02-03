

<div class="content-container">
  <article class="typography">
    <header>
      <h1>$Title</h1>
    </header>

    <div class="owl-carousel">
      <% if $HomePageSlides %>
          <% loop $HomePageSlides %>
            <% if $Image %>
              <h1>$Image</h1>
            <% end_if %>
            <% if $Title %>
              <h2>$Title</h2>
            <% end_if %>
          <% end_loop %>
      <% end_if %>
    </div>
  </article>
</div>
