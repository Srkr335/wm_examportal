<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CoursePlaylist;
use App\Models\CourseStudyMaterial;
use App\Models\PurchaseRequest;
use App\Models\Quiz;
use App\Models\StudentPurchasedCourse;
use App\Models\StudentWishlistedCourse;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCourses()
    {
        $courses = Course::get();
        foreach ($courses as $course) {
            // $course['prices'] = CoursePricing::where('course_id', $course->id)->get();
            $course['playlists'] = CoursePlaylist::where('course_id', $course->id)->get();
            // $course['tags'] = CourseTag::leftJoin('tags', 'tags.id', 'course_tags.tag_id')->where('course_tags.course_id', $course->id)->get();
            // $course['tutor'] = CourseTutor::where('course_id', $course->id)->get();
            $course['is_purchased'] = StudentPurchasedCourse::where('student_id', auth()->user()->student->id)->where('course_id', $course->id)->exists();
            $course['is_wishlisted'] = StudentWishlistedCourse::where('student_id', auth()->user()->student->id)->where('course_id', $course->id)->exists();
        }

        return $this->responseWithSuccess('Course fetched successfully', $courses);
    }


    public function getCourseUnderCategory($id)
    {

        $courses = Course::where('category_id', $id)->where('status', 1)->get();
        $courses->map(function ($course) {
            $course->cover_photo = null;
            $course->image_url = null;
            $course->prelude_video_link =  null;
            $course->video_url = null;
            // if ($course->courcePlaylist) {
            //     $course->cover_photo = $course->courcePlaylist->cover_photo ? asset('/course/images/' . $course->courcePlaylist->cover_photo) : null;
            //     $course->image_url = $course->courcePlaylist->image_url ? asset('/course/images/' . $course->courcePlaylist->image_url) : null;
            //     $course->prelude_video_link = $course->courcePlaylist->prelude_video_link ? asset('/course/videos/' . $course->courcePlaylist->prelude_video_link) : null;
            //     $course->video_url = $course->courcePlaylist->video_ur ? asset('/course/videos/' . $course->courcePlaylist->video_url) : null;
            // }
            // $course['prices'] = CoursePricing::where('course_id', $course->id)->get();
            $course['playlists'] = CoursePlaylist::where('course_id', $course->id)->get();
            $course['playlists']->map(function ($playlist) {
                $playlist->cover_photo = $playlist->cover_photo ? asset('/course/images/' . $playlist->cover_photo) : null;
                $playlist->image_url = $playlist->image_url ? asset('/course/images/' . $playlist->image_url) : null;
                $playlist->prelude_video_link = $playlist->prelude_video_link ? asset('/course/videos/' . $playlist->prelude_video_link) : null;
                $playlist->video_url = $playlist->video_ur ? asset('/course/videos/' . $playlist->video_url) : null;
            });
            $course['is_purchased'] = StudentPurchasedCourse::where('student_id', auth()->user()->student->id)->where('course_id', $course->id)->exists();
            $course['is_wishlisted'] = StudentWishlistedCourse::where('student_id', auth()->user()->student->id)->where('course_id', $course->id)->exists();

            // $course['tags'] = CourseTag::leftJoin('tags', 'tags.id', 'course_tags.tag_id')->where('course_tags.course_id', $course->id)->get();
            // $course['tutor'] = CourseTutor::where('course_id', $course->id)->get();
        });

        return $this->responseWithSuccess('Courses fetched successfully', $courses);
    }


    public function getCourseDetails($id)
    {

        $course = Course::find($id);
        $course['playlists'] = CoursePlaylist::where('course_id', $course->id)->get();
        $course['playlists']->map(function ($playlist) {
            $playlist->cover_photo = $playlist->cover_photo ? asset('/course/images/' . $playlist->cover_photo) : null;
            $playlist->image_url = $playlist->image_url ? asset('/course/images/' . $playlist->image_url) : null;
            $playlist->prelude_video_link = $playlist->prelude_video_link ? asset('/course/videos/' . $playlist->prelude_video_link) : null;
            $playlist->video_url = $playlist->video_ur ? asset('/course/videos/' . $playlist->video_url) : null;
        });

        return $this->responseWithSuccess('Course fetched successfully', $course);
    }

    public function getStudyMaterials($id)
    {
        $studyMaterials = CourseStudyMaterial::where('course_id', $id)->get();
        $studyMaterials->map(function ($studyMaterial) {
            $studyMaterial->file = $studyMaterial->file ? asset('/uploads/study-materials/' . $studyMaterial->file) : null;
        });

        return $this->responseWithSuccess('Study Materials fetched successfully', $studyMaterials);
    }
    public function getQuiz(Request $request)
    {
        if (!$request->course_id) {
            return $this->responseWithError('Course id is required');
        }
        $quiz = Quiz::where('course_id', $request->course_id)->get();
        if ($quiz->count() == 0) {
            return $this->responseWithError('No quiz found');
        }
        $position = $request->position ? $request->position : 0;
        $totalQuiz = $quiz->count();
        $currentQuiz = $position + 1;
        $remainingQuiz = $totalQuiz - $currentQuiz;

        return $this->responseWithSuccess('Quiz fetched successfully', ['quiz' => $quiz[$position], 'position' => $position, 'total_quiz' => $totalQuiz, 'current_quiz' => $currentQuiz, 'remaining_quiz' => $remainingQuiz]);
    }

    public function purchasedCourse()
    {
        $purchasedCourse = StudentPurchasedCourse::with('course')->where('student_id', auth()->user()->student->id)->get();

        $purchasedCourse->map(function ($purchasedCourse) {
            $purchasedCourse->course['playlists'] = CoursePlaylist::where('course_id', $purchasedCourse->course->id)->get();
            $purchasedCourse->course['playlists']->map(function ($playlist) {
                $playlist->cover_photo = $playlist->cover_photo ? asset('/course/images/' . $playlist->cover_photo) : null;
                $playlist->image_url = $playlist->image_url ? asset('/course/images/' . $playlist->image_url) : null;
                $playlist->prelude_video_link = $playlist->prelude_video_link ? asset('/course/videos/' . $playlist->prelude_video_link) : null;
                $playlist->video_url = $playlist->video_ur ? asset('/course/videos/' . $playlist->video_url) : null;
            });
            $purchasedCourse->course['is_wishlisted'] = StudentWishlistedCourse::where('student_id', auth()->user()->student->id)->where('course_id', $purchasedCourse->course->id)->exists();
        });

        return $this->responseWithSuccess('Purchased Courses fetched successfully', $purchasedCourse);
    }

    public function addToWishlist(Request $request)
    {
        if (!$request->course_id) {
            return $this->responseWithError('Course id is required');
        }

        if (StudentWishlistedCourse::where('student_id', auth()->user()->student->id)->where('course_id', $request->course_id)->exists()) {
            $wishlist = StudentWishlistedCourse::where('student_id', auth()->user()->student->id)->where('course_id', $request->course_id)->delete();

            return $this->responseWithSuccess('Course removed from wishlist successfully', $wishlist);
        } else {
            $wishlist = new StudentWishlistedCourse();
            $wishlist->student_id = auth()->user()->student->id;
            $wishlist->course_id = $request->course_id;
            $wishlist->wishlisted_date = Carbon::now()->format('Y-m-d H:i:s');
            $wishlist->save();

            return $this->responseWithSuccess('Course added to wishlist successfully', $wishlist);
        }
    }

    public function getWishlist()
    {
        $wishlistedCourse = StudentWishlistedCourse::with('course')->where('student_id', auth()->user()->student->id)->get();

        $wishlistedCourse->map(function ($wishlistedCourse) {
            $wishlistedCourse->course['playlists'] = CoursePlaylist::where('course_id', $wishlistedCourse->course->id)->get();
            $wishlistedCourse->course['playlists']->map(function ($playlist) {
                $playlist->cover_photo = $playlist->cover_photo ? asset('/course/images/' . $playlist->cover_photo) : null;
                $playlist->image_url = $playlist->image_url ? asset('/course/images/' . $playlist->image_url) : null;
                $playlist->prelude_video_link = $playlist->prelude_video_link ? asset('/course/videos/' . $playlist->prelude_video_link) : null;
                $playlist->video_url = $playlist->video_ur ? asset('/course/videos/' . $playlist->video_url) : null;
            });
            $wishlistedCourse->course['is_purchased'] = StudentPurchasedCourse::where('student_id', auth()->user()->student->id)->where('course_id', $wishlistedCourse->course->id)->exists();
        });

        return $this->responseWithSuccess('Wishlist Courses fetched successfully', $wishlistedCourse);
    }

    public function applyPurchaseRequest(Request $request)
    {
        if (!$request->course_id) {
            return $this->responseWithError('Course id is required');
        }

        if (PurchaseRequest::where('student_id', auth()->user()->student->id)->where('course_id', $request->course_id)->exists()) {
            $wishlist = PurchaseRequest::where('student_id', auth()->user()->student->id)->where('course_id', $request->course_id)->delete();

            return $this->responseWithSuccess('Course removed from purchase request', $wishlist);
        } else {
            $wishlist = new PurchaseRequest();
            $wishlist->student_id = auth()->user()->student->id;
            $wishlist->course_id = $request->course_id;
            $wishlist->save();

            return $this->responseWithSuccess('Course added to purchase request', $wishlist);
        }
    }

    public function getPurchaseRequest()
    {
        $purchaseRequestedCourse = PurchaseRequest::with('course')->where('student_id', auth()->user()->student->id)->get();

        $purchaseRequestedCourse->map(function ($purchaseRequestedCourse) {
            $purchaseRequestedCourse->course['playlists'] = CoursePlaylist::where('course_id', $purchaseRequestedCourse->course->id)->get();
            $purchaseRequestedCourse->course['playlists']->map(function ($playlist) {
                $playlist->cover_photo = $playlist->cover_photo ? asset('/course/images/' . $playlist->cover_photo) : null;
                $playlist->image_url = $playlist->image_url ? asset('/course/images/' . $playlist->image_url) : null;
                $playlist->prelude_video_link = $playlist->prelude_video_link ? asset('/course/videos/' . $playlist->prelude_video_link) : null;
                $playlist->video_url = $playlist->video_ur ? asset('/course/videos/' . $playlist->video_url) : null;
            });
            $purchaseRequestedCourse->course['is_purchased'] = StudentPurchasedCourse::where('student_id', auth()->user()->student->id)->where('course_id', $purchaseRequestedCourse->course->id)->exists();
            $purchaseRequestedCourse->course['is_wishlisted'] = StudentWishlistedCourse::where('student_id', auth()->user()->student->id)->where('course_id', $purchaseRequestedCourse->course->id)->exists();
        });

        return $this->responseWithSuccess('Purchased Request fetched successfully', $purchaseRequestedCourse);
    }
}
