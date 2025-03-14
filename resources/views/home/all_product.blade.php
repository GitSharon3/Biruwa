<!DOCTYPE html>
<html>

<head>
   <!-- Basic -->
   <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas --> 
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="/images/logoo.jpg" type="">
      <title>Biruwa</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <style>
      .cpy_ {
         background:rgb(238, 245, 228);
         /* Green shades */
         color: #ffffff;
         /* White text for contrast */
         padding: 15px;
         text-align: center;
         font-family: Arial, sans-serif;
         border-radius: 8px;
      }
      .mx-auto{
         color:black !important;
      }

      .cpy_ p {
         margin: 0;
         font-size: 14px;
      }

      .cpy_ nav {
         margin-top: 5px;
      }

      .cpy_ a {
         color: black;
         /* Light green shade */
         text-decoration: none;
         margin: 0 10px;
         font-weight: bold;
         transition: color 0.3s ease;
      }

      .cpy_ a:hover {
         color:black;
         /* Lighter green on hover */
      }
   </style>

</head>

<body>
   <div class="hero_area">
      <!--header-->
      @include('home.header')
 
   @include('home.product_view')
   <!-- end product section -->

   
   <!-- Comment Section -->
<div style="text-align: center; padding: 20px; background-color: #f0faf0; border-radius: 10px; margin: 20px auto; max-width: 1000px; width: 70%;">
   <h1 style="font-size: 28px; color: #2e7d32; font-weight: bold; padding-bottom: 20px;">Comments</h1>

   <!-- Comment Form -->
   <form action="{{url('add_comment')}}" method="POST" style="margin-bottom: 30px;">
      @csrf
      <textarea style="height: 150px; width: 100%; padding: 10px; border: 2px solid #2e7d32; border-radius: 8px; font-size: 16px; resize: none;" placeholder="Write your comment here..." name="comment"></textarea>
      <br><br>
      <input type="submit" class="btn btn-primary" value="Comment" style="background-color: #2e7d32; color: white; font-size: 16px; padding: 10px 20px; border: none; border-radius: 8px; cursor: pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#1b5e20'" onmouseout="this.style.backgroundColor='#2e7d32'">
   </form>

   <!-- All Comments -->
   <div style="text-align: left; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
      <h2 style="font-size: 24px; color: #2e7d32; font-weight: bold; padding-bottom: 15px;">All Comments</h2>

      @foreach($comment as $comment)
      <div style="margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid #e0e0e0;">
         <b style="font-size: 18px; color: #2e7d32;">{{$comment->name}}</b>
         <p style="font-size: 16px; color: #555; margin-top: 8px;">{{$comment->comment}}</p>
         <a style="color: #2e7d32; text-decoration: none; font-weight: bold; cursor: pointer;" href="javascript:void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>

         <!-- Replies -->
         @foreach ($reply as $rep)
            @if($rep->comment_id == $comment->id)
               <div style="margin-top: 15px; padding-left: 20px; border-left: 3px solid #2e7d32;">
                  <b style="font-size: 16px; color: #2e7d32;">{{$rep->name}}</b>
                  <p style="font-size: 14px; color: #555; margin-top: 5px;">{{$rep->reply}}</p>
                  <a style="color: #2e7d32; text-decoration: none; font-weight: bold; cursor: pointer;" href="javascript:void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>
               </div>
            @endif
         @endforeach
      </div>
      @endforeach
   </div>

   <!-- Reply Form (Hidden by Default) -->
   <div style="display: none; margin-top: 20px; background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); width: 100%;" class="replyDiv">
      <form action="{{url('add_reply')}}" method="POST">
         @csrf
         <input type="text" id="commentId" name="commentId" hidden>
         <textarea style="height: 100px; width: 100%; padding: 10px; border: 2px solid #2e7d32; border-radius: 8px; font-size: 16px; resize: none;" placeholder="Write your reply here..." name="reply"></textarea>
         <br><br>
         <button type="submit" class="btn btn-warning" style="background-color: #2e7d32; color: white; font-size: 16px; padding: 10px 20px; border: none; border-radius: 8px; cursor: pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#1b5e20'" onmouseout="this.style.backgroundColor='#2e7d32'">Reply</button>
         <a href="javascript:void(0);" class="btn" style="background-color: #e74c3c; color: white; font-size: 16px; padding: 10px 20px; border: none; border-radius: 8px; cursor: pointer; transition: background-color 0.3s ease;" onclick="reply_close(this)" onmouseover="this.style.backgroundColor='#c0392b'" onmouseout="this.style.backgroundColor='#e74c3c'">Close</a>
      </form>
   </div>
</div>


   @include('home.footer')
   <!-- footer end -->
   <div class="cpy_">
      <p class="mx-auto">© 2025 Biruwa. All rights reserved.
      <nav>
         <a href="privacy.html">Privacy Policy</a>
         <a href="terms.html">Terms & Conditions</a>
         <a href="contact.html">Contact</a>
      </nav>
      </p>
   </div>


   <script type="text/javascript">

      function reply (caller){
         document.getElementById('commentId').value=$(caller).attr('data-Commentid');

         $('.replyDiv').insertAfter($(caller));
         $('.replyDiv').show();

      }

      function reply_close(caller)
      {
         $('.replyDiv').hide();

}
      </script>

<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
   <!-- jQery -->
   <script src="home/js/jquery-3.4.1.min.js"></script>
   <!-- popper js -->
   <script src="home/js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="home/js/bootstrap.js"></script>
   <!-- custom js -->
   <script src="home/js/custom.js"></script>
</body>

</html>