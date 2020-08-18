<?php include 'csecode.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>Notes and pdf upload and download application</title>
        <meta charset="utf-8">
  
        <link rel="stylesheet" href="pdfnotes.css">
    </head>
    <body>
    <section class="text-gray-400 bg-gray-900 body-font">
            <div class="container px-5 pt-12 pb-4 mx-auto flex flex-wrap d-flex justify-content-center">
            
                
                <div class="ml-12 row items-center p-0 border-2 border-gray-700 rounded-lg">
                    <form action="csecode.php" method="post" enctype="multipart/form-data">
                        <h3 class="text-center">Upload Files</h3>
                        <label for="name" class="p-2 ml-4"><b>Enter Name:</b></label><br>
                        <input class="p-2 ml-4 bg-gray-800 text-white rounded border border-gray-700 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Enter Name" type="text" name="uname" required><br>

                        <label class="p-2 ml-4" for="name"><b>Subject name</b></label><br>
                        <input class="p-2 ml-4 bg-gray-800 text-white rounded border border-gray-700 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Enter subject name" type="text" name="sub_name" required><br>
                        <input class="p-2 ml-4 bg-gray-800 gray-600 rounded-lg" type="file" name="myfile"><br>
                        <button type="submit" class="p-2 px-4 ml-8 mt-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg" name="save">Upload</button><br><br></form>
                          
                    </form>
                </div>
               
              </div>
            </div>
          </section>
        <section class="text-gray-400 bg-gray-900 body-font">
            <div class="container px-2 py-10 mx-auto">
              
              <div class=" w-full mx-auto overflow-auto">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                  <thead>
                    <tr>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">S No.</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Subject Name</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Notes By:</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Downloads</th>
                      <th class="w-10 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tr rounded-br">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php foreach ($files as $file): ?>
                    <tr>
                      <td><?php echo $file['id']; ?></td>
                      <td><?php echo $file['sub_name']; ?></td>
                      <td><?php echo $file['uname'] ; ?></td>
                      <td><?php echo $file['downloads']; ?></td>
                      <td><a href="csenotes.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              
            </div>
          </section>

    </body>
</html>