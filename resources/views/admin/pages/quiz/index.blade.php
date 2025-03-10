@extends('admin.layouts.admin_app')

@section('content')
    <div class="container-fluid" style="transform: none;">
        <div class="row" style="transform: none;">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">

                        <div class="">

                            <div class="settings-inner-blk p-0">
                                <div class="sell-course-head comman-space d-flex justify-content-between align-items-center">
                                    <h3>Questions</h3>
                                    <div class="go-dashboard text-center">
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-upload"></i> Import
                                    </button>
                                        <a href="{{ route('admin.quiz.create') }}" class="btn btn-primary">Create New
                                            Questions</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="comman-space pb-0 card-body">

                                        <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                            <table class="table table-nowrap mb-2">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No</th>
                                                        <th>Course</th>
                                                        <th>Question</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $n = 0; ?>
                                                    @foreach ($quizzes as $quiz)
                                                        <?php $n++; ?>
                                                        <tr>
                                                            <td>{{ $n }}</td>

                                                            <td>{{ $quiz->course_id ? $quiz->course->title : '' }}</td>
                                                            <td>{{ Str::limit($quiz->question, 50) }}</td>
                                                            <td>
                                                                @if ($quiz->status == 1)
                                                                    <span class="badge info-low">Enabled</span>
                                                                @else
                                                                    <span class="badge info-inter">Disabled</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <a href="{{ route('admin.quiz.edit', $quiz->id) }}" class="btn btn-outline-info rounded-pill shadow-sm">
                                                                        <i class="fas fa-edit"></i> Edit
                                                                    </a>
                                                                    <a href="{{ route('admin.quiz.destroy', $quiz->id) }}" class="btn btn-outline-danger rounded-pill shadow-sm">
                                                                        <i class="fas fa-trash-alt"></i> Delete
                                                                    </a>
                                                                </div>
                                                            </td>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6 text-right">
                                            {{ $quizzes->links() }}
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Exam Questions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('admin.exam.import') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="modal-body">
           <div class="form-group">
           <label class="add-course-label">Course <span
           class="text-danger">*</span></label>
            <select class="form-control select" name="course_id" required>
                                                <option value="">Select a Course</option>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('course_id'))
                                                <span class="text-sm text-danger">
                                                    {{ $errors->first('course_id') }}
                                                </span>
                                            @endif
          </div>
          <div class="form-group">
                                                <label class="form-control-label">Batch<span
                                                class="text-danger">*</span></label>
                                                <select class="form-control select" name="batch_id" required>
                                                <option value="">Select Batch</option>
                                                @foreach ($batches as $batch)
                                                    <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('course_id'))
                                                <span class="text-sm text-danger">
                                                    {{ $errors->first('course_id') }}
                                                </span>
                                            @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Exam<span
                                                class="text-danger">*</span></label>
                                                <select class="form-control select" name="exam" required>
                                                <option value="">Select Exam</option>
                                                @foreach ($exams as $exam)
                                                    <option value="{{ $exam->id }}">{{ $exam->exam_name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('course_id'))
                                                <span class="text-sm text-danger">
                                                    {{ $errors->first('course_id') }}
                                                </span>
                                            @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Exam Module<span
                                                class="text-danger">*</span></label>
                                                <select class="form-control select" name="module_id" required>
                                                <option value="">Select Module</option>
                                                @foreach ($examModules as $module)
                                                    <option value="{{ $module->id }}">{{ $module->modules_name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('course_id'))
                                                <span class="text-sm text-danger">
                                                    {{ $errors->first('course_id') }}
                                                </span>
                                            @endif
                                            </div>
          <div class="form-group">
            <label for="file">Upload File<span
            class="text-danger">*</span></label>
            <input type="file" name="file" class="form-control" id="file" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
