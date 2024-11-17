    </div>
    <style>
      .flat-under {
        display: flex;
        justify-content: center;
        gap: 15px;
        padding: 20px;
        background-color: rgba(61, 67, 73, 0.7);
        border-radius: 0 0 10px 10px;
        position: absolute;
        bottom: 0;
        width: 100%;
      }
      .grow-container {
        display: inline-flex;
      }
      .circle-button {
        display: inline-block;
        width: 50px;
        height: 50px;
        background-color: #ffffff;
        color: #3d4349;
        border-radius: 50%;
        text-align: center;
        line-height: 50px;
        transition: all 0.3s ease;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
      }
      .circle-button:hover {
        background-color: #ffc107;
        color: #ffffff;
        transform: scale(1.1);
      }
      .fa-fw {
        font-size: 24px;
        line-height: 50px;
      }
    </style>
    <div class="flat-under">
        <div class="grow-container">
            <a href="#" class="to-twitter circle-button">
                <i class="fa fa-twitter fa-fw" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grow-container">
            <a href="#" class="to-red circle-button">
                <i class="fa fa-google-plus fa-fw" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grow-container">
            <a href="#" class="to-facebook circle-button">
                <i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grow-container">
            <a href="#" class="to-linkedin circle-button">
                <i class="fa fa-linkedin fa-fw" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grow-container">
            <a href="#" class="to-reddit circle-button">
                <i class="fa fa-reddit-alien fa-fw" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
