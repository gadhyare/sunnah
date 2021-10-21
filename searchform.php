<!-- Button trigger modal -->
<button type="button" class="btn btn-dark   " data-mdb-toggle="modal" data-mdb-target="#exampleModal">
    <i class="fa fa-search"></i>
</button>

<!-- Modal -->
<div class="modal fade mt-5   rounded-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content  rounded-0">
            <div class="modal-body  rounded-0">
                <div id="search-6" class="et_pb_widget widget_search m-auto text-center  py-5 rounded-0">
                    <form role="search" method="get" id="searchform" class="searchform  py-5 rounded-0" action="<?php echo home_url('/'); ?>">
                        <input type="search" value="<?php the_search_query(); ?>" name="s" id="s" class="form-control rounded-0  py-2 border px-3  w-100 " placeholder="search....">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>