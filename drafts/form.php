   <form method="POST" action="http://localhost:8888/articles" >
        <input name="_token" type="hidden" >
        <div class="form-group">
            <label for="title">The title of the Article</label>
            <input name="title"  class="form-control" type="text"></input>
            
        </div>    

        <div class="form-group">
            <text for="body">The body of the new Article</label>
            <textarea name="body" class="form-control" type="text"></textarea>
        </div>
            
        
        <div class="form-group">
            <input class="btn btn-primary form-control" type="submit" value="Add Article"></input>
        </div>
        
        
    </form>