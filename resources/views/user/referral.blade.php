  
                   <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Referral Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Point</th>
                            <th scope="col">Redeem</th>
                          </tr>
                        </thead>
                        <tbody id="myTable">
                          
                         @foreach($users as $user)
                         <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->contact_no}}</td>
                                    <td><input type="number" name="" value="0"></td>
                                    <form action="/redeem/store" method="post">
                                      {{csrf_field()}}
                                      <td><input type="submit" name="submit" value="Submit">Redeem Now</td>
                                  </form>
                                  </tr>
                              @endforeach
                              
                        </tbody>
                      </table>


