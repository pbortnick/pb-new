

<div class="content-container">
  <article class="typography">
    <header>
      <h1>$Title</h1>
    </header>

    <div id="owl-demo" class="owl-carousel owl-theme">
      <% if $HomePageSlides %>

          <% loop $HomePageSlides %>
            <div class="item">
              <% if $Image %>
                $Image
              <% end_if %>

              <% if $Title %>
                <h2>$Title</h2>
              <% end_if %>
            </div>

          <% end_loop %>

        <% end_if %>

    </div>

    <div class="comments">
      <% if $HomePageComments %>
        <div class="comments">
          <% loop $HomePageComments %>
          <% end_loop %>
        </div>
      <% end_if %>
    </div>

    <div class="form">
      $ImageCommentForm
    </div>

  </article>

</div>
