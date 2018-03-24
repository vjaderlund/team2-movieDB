+<div>
+    <div class="reveal" id="movie-review" data-reveal>
+        <div>
+           <review-form
+           :Movie="{{$Movies}}"
+           url="{{route('review.store')}}"
+           >
+
+           </review-form>
+        </div>
+        <button class="close-button" data-close aria-label="Close modal" type="button">
+            <span aria-hidden="true">&times;</span>
+        </button>
+    </div>
+</div
