

<div class="content-container">
  <article class="typography">
    <header>
      <h1>$Title</h1>
    </header>

    <div class="owl-carousel owl-theme">
      <% if $HomePageSlides %>
          <% loop $HomePageSlides %>
            <% if $Image %>
              <div class="item">$Image</div>
            <% end_if %>
            <% if $Title %>
              <h2>$Title</h2>
            <% end_if %>
          <% end_loop %>
      <% end_if %>
    </div>
  </article>
</div>
