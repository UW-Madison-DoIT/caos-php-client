<?php

class ChubService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'nameType' => '\\nameType',
  'personAttributesType' => '\\personAttributesType',
  'personType' => '\\personType',
  'committeeType' => '\\committeeType',
  'codeDescriptionPairType' => '\\codeDescriptionPairType',
  'ferpaAttributes' => '\\ferpaAttributes',
  'instructor' => '\\instructor',
  'baseStudent' => '\\baseStudent',
  'student' => '\\student',
  'studentClassMembership' => '\\studentClassMembership',
  'session' => '\\session',
  'termType' => '\\termType',
  'classUniqueId' => '\\classUniqueId',
  'schoolCollege' => '\\schoolCollege',
  'subjectType' => '\\subjectType',
  'instructorAffiliation' => '\\instructorAffiliation',
  'instructorAffiliationClass' => '\\instructorAffiliationClass',
  'topic' => '\\topic',
  'gradingBasisType' => '\\gradingBasisType',
  'course' => '\\course',
  'enrollmentStatus' => '\\enrollmentStatus',
  'classAttribute' => '\\classAttribute',
  'class' => '\\classCustom',
  'crossListing' => '\\crossListing',
  'classRoster' => '\\classRoster',
  'building' => '\\building',
  'classMeeting' => '\\classMeeting',
  'textbook' => '\\textbook',
  'otherMaterial' => '\\otherMaterial',
  'classMaterialsType' => '\\classMaterialsType',
  'classMaterialsURI' => '\\classMaterialsURI',
  'enrollmentPackageUniqueId' => '\\enrollmentPackageUniqueId',
  'enrollmentPackage' => '\\enrollmentPackage',
  'enrollmentPackageClass' => '\\enrollmentPackageClass',
  'labeledURI' => '\\labeledURI',
  'instructorProvidedClassDetails' => '\\instructorProvidedClassDetails',
  'courseGuideRoadmap' => '\\courseGuideRoadmap',
  'academicSummaryType' => '\\academicSummaryType',
  'performanceTermType' => '\\performanceTermType',
  'photoInfoType' => '\\photoInfoType',
  'academicObjectiveType' => '\\academicObjectiveType',
  'programsType' => '\\programsType',
  'programType' => '\\programType',
  'plansType' => '\\plansType',
  'planType' => '\\planType',
  'subPlansType' => '\\subPlansType',
  'subPlanType' => '\\subPlanType',
  'degreeCheckoutStatusType' => '\\degreeCheckoutStatusType',
  'studentDirectoryType' => '\\studentDirectoryType',
  'levelType' => '\\levelType',
  'advisorsType' => '\\advisorsType',
  'baseAdvisor' => '\\baseAdvisor',
  'advisorType' => '\\advisorType',
  'advisorCommitteesType' => '\\advisorCommitteesType',
  'baseAdvisorCommittee' => '\\baseAdvisorCommittee',
  'advisorCommitteeType' => '\\advisorCommitteeType',
  'advisorCommitteeRelationshipsType' => '\\advisorCommitteeRelationshipsType',
  'advisorCommitteeRelationshipType' => '\\advisorCommitteeRelationshipType',
  'academicStandingActionsType' => '\\academicStandingActionsType',
  'academicStandingActionType' => '\\academicStandingActionType',
  'studentAdvisorRelationshipsType' => '\\studentAdvisorRelationshipsType',
  'studentAdvisorRelationshipType' => '\\studentAdvisorRelationshipType',
  'addressType' => '\\addressType',
  'creditsType' => '\\creditsType',
  'creditTotalsType' => '\\creditTotalsType',
  'creditsCumulativeType' => '\\creditsCumulativeType',
  'creditTermType' => '\\creditTermType',
  'creditTermsType' => '\\creditTermsType',
  'transferCreditType' => '\\transferCreditType',
  'transferCreditsType' => '\\transferCreditsType',
  'entryInformationType' => '\\entryInformationType',
  'entryEventsType' => '\\entryEventsType',
  'entryEventType' => '\\entryEventType',
  'testScoresType' => '\\testScoresType',
  'testType' => '\\testType',
  'testComponentsType' => '\\testComponentsType',
  'testComponentType' => '\\testComponentType',
  'range' => '\\range',
  'testResultsType' => '\\testResultsType',
  'testResultType' => '\\testResultType',
  'integerRangeType' => '\\integerRangeType',
  'secondarySchoolsType' => '\\secondarySchoolsType',
  'transcriptTextType' => '\\transcriptTextType',
  'secondarySchoolType' => '\\secondarySchoolType',
  'subjectAreasType' => '\\subjectAreasType',
  'subjectAreaType' => '\\subjectAreaType',
  'areaOfStudyType' => '\\areaOfStudyType',
  'enrollmentType' => '\\enrollmentType',
  'primaryCareerType' => '\\primaryCareerType',
  'careersType' => '\\careersType',
  'careerType' => '\\careerType',
  'residencyType' => '\\residencyType',
  'phoneType' => '\\phoneType',
  'studentGroupType' => '\\studentGroupType',
  'studentGroupsType' => '\\studentGroupsType',
  'enrollmentSummaryType' => '\\enrollmentSummaryType',
  'enrollmentTermType' => '\\enrollmentTermType',
  'enrollmentClassType' => '\\enrollmentClassType',
  'affiliationsType' => '\\affiliationsType',
  'recruitingCategoriesType' => '\\recruitingCategoriesType',
  'recruitingCategoryType' => '\\recruitingCategoryType',
  'enrollmentImpacts' => '\\enrollmentImpacts',
  'holdsType' => '\\holdsType',
  'holdType' => '\\holdType',
  'registrationAppointmentType' => '\\registrationAppointmentType',
  'deansExceptions' => '\\deansExceptions',
  'deansExceptionType' => '\\deansExceptionType',
  'studentServiceIndicator' => '\\studentServiceIndicator',
  'GetPresentTermRequest' => '\\GetPresentTermRequest',
  'GetPresentTermResponse' => '\\GetPresentTermResponse',
  'GetCurrentTermsRequest' => '\\GetCurrentTermsRequest',
  'GetCurrentTermsResponse' => '\\GetCurrentTermsResponse',
  'GetAvailableTermsRequest' => '\\GetAvailableTermsRequest',
  'GetAvailableTermsResponse' => '\\GetAvailableTermsResponse',
  'GetAvailableAndFutureTermsRequest' => '\\GetAvailableAndFutureTermsRequest',
  'GetAvailableAndFutureTermsResponse' => '\\GetAvailableAndFutureTermsResponse',
  'GetSessionsInTermRequest' => '\\GetSessionsInTermRequest',
  'GetSessionsInTermResponse' => '\\GetSessionsInTermResponse',
  'GetUniqueSubjectCodesRequest' => '\\GetUniqueSubjectCodesRequest',
  'GetUniqueSubjectCodesResponse' => '\\GetUniqueSubjectCodesResponse',
  'GetUniqueSubjectCodesByAcademicOrgRequest' => '\\GetUniqueSubjectCodesByAcademicOrgRequest',
  'GetUniqueSubjectCodesByAcademicOrgResponse' => '\\GetUniqueSubjectCodesByAcademicOrgResponse',
  'GetAllSchoolCollegesRequest' => '\\GetAllSchoolCollegesRequest',
  'GetAllSchoolCollegesResponse' => '\\GetAllSchoolCollegesResponse',
  'GetSubjectsInTermRequest' => '\\GetSubjectsInTermRequest',
  'GetSubjectsInTermResponse' => '\\GetSubjectsInTermResponse',
  'GetSubjectRequest' => '\\GetSubjectRequest',
  'GetSubjectResponse' => '\\GetSubjectResponse',
  'GetCoursesBySubjectRequest' => '\\GetCoursesBySubjectRequest',
  'GetCoursesBySubjectResponse' => '\\GetCoursesBySubjectResponse',
  'GetCourseIdsBySubjectRequest' => '\\GetCourseIdsBySubjectRequest',
  'GetCourseIdsBySubjectResponse' => '\\GetCourseIdsBySubjectResponse',
  'GetCourseHistoryRequest' => '\\GetCourseHistoryRequest',
  'GetCourseHistoryResponse' => '\\GetCourseHistoryResponse',
  'GetCourseHistoryByCatalogNumberRequest' => '\\GetCourseHistoryByCatalogNumberRequest',
  'GetCourseHistoryByCatalogNumberResponse' => '\\GetCourseHistoryByCatalogNumberResponse',
  'GetCourseByCatalogNumberRequest' => '\\GetCourseByCatalogNumberRequest',
  'GetCourseByCatalogNumberResponse' => '\\GetCourseByCatalogNumberResponse',
  'GetCourseByCourseIdRequest' => '\\GetCourseByCourseIdRequest',
  'GetCourseByCourseIdResponse' => '\\GetCourseByCourseIdResponse',
  'GetCrossListedSubjectsRequest' => '\\GetCrossListedSubjectsRequest',
  'GetCrossListedSubjectsResponse' => '\\GetCrossListedSubjectsResponse',
  'GetCourseWithCrossListedSubjectsRequest' => '\\GetCourseWithCrossListedSubjectsRequest',
  'GetCourseWithCrossListedSubjectsResponse' => '\\GetCourseWithCrossListedSubjectsResponse',
  'GetClassRequest' => '\\GetClassRequest',
  'GetClassResponse' => '\\GetClassResponse',
  'GetClassesRequest' => '\\GetClassesRequest',
  'GetClassesResponse' => '\\GetClassesResponse',
  'GetClassesMeetingWithinBuildingRequest' => '\\GetClassesMeetingWithinBuildingRequest',
  'GetClassesMeetingWithinBuildingResponse' => '\\GetClassesMeetingWithinBuildingResponse',
  'GetClassesWithDefinedMaterialsRequest' => '\\GetClassesWithDefinedMaterialsRequest',
  'GetClassesWithDefinedMaterialsResponse' => '\\GetClassesWithDefinedMaterialsResponse',
  'GetClassMaterialsRequest' => '\\GetClassMaterialsRequest',
  'GetClassMaterialsResponse' => '\\GetClassMaterialsResponse',
  'GetClassMaterialsForCourseRequest' => '\\GetClassMaterialsForCourseRequest',
  'GetClassMaterialsForCourseResponse' => '\\GetClassMaterialsForCourseResponse',
  'GetClassMaterialsURIRequest' => '\\GetClassMaterialsURIRequest',
  'GetClassMaterialsURIResponse' => '\\GetClassMaterialsURIResponse',
  'GetClassMaterialsURIForCourseRequest' => '\\GetClassMaterialsURIForCourseRequest',
  'GetClassMaterialsURIForCourseResponse' => '\\GetClassMaterialsURIForCourseResponse',
  'GetClassMaterialsURIForCourseByCatalogNumberRequest' => '\\GetClassMaterialsURIForCourseByCatalogNumberRequest',
  'GetClassMaterialsURIForCourseByCatalogNumberResponse' => '\\GetClassMaterialsURIForCourseByCatalogNumberResponse',
  'GetClassMeetingsRequest' => '\\GetClassMeetingsRequest',
  'GetClassMeetingsResponse' => '\\GetClassMeetingsResponse',
  'GetUniqueClassAttributesInTermRequest' => '\\GetUniqueClassAttributesInTermRequest',
  'GetUniqueClassAttributesInTermResponse' => '\\GetUniqueClassAttributesInTermResponse',
  'GetClassRosterRequest' => '\\GetClassRosterRequest',
  'GetClassRosterResponse' => '\\GetClassRosterResponse',
  'GetCombinedClassRosterRequest' => '\\GetCombinedClassRosterRequest',
  'GetCombinedClassRosterResponse' => '\\GetCombinedClassRosterResponse',
  'GetClassUniqueIdsRequest' => '\\GetClassUniqueIdsRequest',
  'GetClassUniqueIdsResponse' => '\\GetClassUniqueIdsResponse',
  'GetCrossListedClassUniqueIdsRequest' => '\\GetCrossListedClassUniqueIdsRequest',
  'GetCrossListedClassUniqueIdsResponse' => '\\GetCrossListedClassUniqueIdsResponse',
  'GetCrossListedClassesRequest' => '\\GetCrossListedClassesRequest',
  'GetCrossListedClassesResponse' => '\\GetCrossListedClassesResponse',
  'GetEnrolledClassUniqueIdsRequest' => '\\GetEnrolledClassUniqueIdsRequest',
  'GetEnrolledClassUniqueIdsResponse' => '\\GetEnrolledClassUniqueIdsResponse',
  'GetEnrolledClassesRequest' => '\\GetEnrolledClassesRequest',
  'GetEnrolledClassesResponse' => '\\GetEnrolledClassesResponse',
  'GetEnrolledInstructorAffiliationClassesRequest' => '\\GetEnrolledInstructorAffiliationClassesRequest',
  'GetEnrolledInstructorAffiliationClassesResponse' => '\\GetEnrolledInstructorAffiliationClassesResponse',
  'GetEnrollmentPackagesRequest' => '\\GetEnrollmentPackagesRequest',
  'GetEnrollmentPackagesResponse' => '\\GetEnrollmentPackagesResponse',
  'GetInstructorsByPrimaryTeachingOrgRequest' => '\\GetInstructorsByPrimaryTeachingOrgRequest',
  'GetInstructorsByPrimaryTeachingOrgResponse' => '\\GetInstructorsByPrimaryTeachingOrgResponse',
  'GetInstructorAffiliationsRequest' => '\\GetInstructorAffiliationsRequest',
  'GetInstructorAffiliationsResponse' => '\\GetInstructorAffiliationsResponse',
  'GetInstructorAffiliationsForCourseRequest' => '\\GetInstructorAffiliationsForCourseRequest',
  'GetInstructorAffiliationsForCourseResponse' => '\\GetInstructorAffiliationsForCourseResponse',
  'GetInstructorAffiliationsForTeacherRequest' => '\\GetInstructorAffiliationsForTeacherRequest',
  'GetInstructorAffiliationsForTeacherResponse' => '\\GetInstructorAffiliationsForTeacherResponse',
  'GetInstructorAffiliationClassesForCourseRequest' => '\\GetInstructorAffiliationClassesForCourseRequest',
  'GetInstructorAffiliationClassesForCourseResponse' => '\\GetInstructorAffiliationClassesForCourseResponse',
  'GetInstructorAffiliationClassesForTeacherRequest' => '\\GetInstructorAffiliationClassesForTeacherRequest',
  'GetInstructorAffiliationClassesForTeacherResponse' => '\\GetInstructorAffiliationClassesForTeacherResponse',
  'GetSubjectsInstructorIsTeachingRequest' => '\\GetSubjectsInstructorIsTeachingRequest',
  'GetSubjectsInstructorIsTeachingResponse' => '\\GetSubjectsInstructorIsTeachingResponse',
  'GetStudentsThatHaveDroppedRequest' => '\\GetStudentsThatHaveDroppedRequest',
  'GetStudentsThatHaveDroppedResponse' => '\\GetStudentsThatHaveDroppedResponse',
  'GetStudentsThatHaveAddedRequest' => '\\GetStudentsThatHaveAddedRequest',
  'GetStudentsThatHaveAddedResponse' => '\\GetStudentsThatHaveAddedResponse',
  'GetStudentEmplidsEnrolledInTermRequest' => '\\GetStudentEmplidsEnrolledInTermRequest',
  'GetStudentEmplidsEnrolledInTermResponse' => '\\GetStudentEmplidsEnrolledInTermResponse',
  'GetStudentsRequest' => '\\GetStudentsRequest',
  'GetStudentsResponse' => '\\GetStudentsResponse',
  'GetTermLastUpdatedRequest' => '\\GetTermLastUpdatedRequest',
  'GetTermLastUpdatedResponse' => '\\GetTermLastUpdatedResponse',
  'GetTermRequest' => '\\GetTermRequest',
  'GetTermResponse' => '\\GetTermResponse',
  'IsCrossListedRequest' => '\\IsCrossListedRequest',
  'IsCrossListedResponse' => '\\IsCrossListedResponse',
  'GetNonTeachingInstructorsRequest' => '\\GetNonTeachingInstructorsRequest',
  'GetNonTeachingInstructorsResponse' => '\\GetNonTeachingInstructorsResponse',
  'GetCourseGuidePrimaryRoadmapCoursesRequest' => '\\GetCourseGuidePrimaryRoadmapCoursesRequest',
  'GetCourseGuidePrimaryRoadmapCoursesResponse' => '\\GetCourseGuidePrimaryRoadmapCoursesResponse',
  'GetCourseGuideRoadmapsRequest' => '\\GetCourseGuideRoadmapsRequest',
  'GetCourseGuideRoadmapsResponse' => '\\GetCourseGuideRoadmapsResponse',
  'GetCourseGuideRoadmapCoursesRequest' => '\\GetCourseGuideRoadmapCoursesRequest',
  'GetCourseGuideRoadmapCoursesResponse' => '\\GetCourseGuideRoadmapCoursesResponse',
  'GetInstructorProvidedClassDetailsRequest' => '\\GetInstructorProvidedClassDetailsRequest',
  'GetInstructorProvidedClassDetailsResponse' => '\\GetInstructorProvidedClassDetailsResponse',
  'GetInstructorProvidedClassDetailsForCourseRequest' => '\\GetInstructorProvidedClassDetailsForCourseRequest',
  'GetInstructorProvidedClassDetailsForCourseResponse' => '\\GetInstructorProvidedClassDetailsForCourseResponse',
  'GetUniqueClassInstructionModesInTermRequest' => '\\GetUniqueClassInstructionModesInTermRequest',
  'GetUniqueClassInstructionModesInTermResponse' => '\\GetUniqueClassInstructionModesInTermResponse',
  'GetAdvisorsRequest' => '\\GetAdvisorsRequest',
  'GetAdvisorsResponse' => '\\GetAdvisorsResponse',
  'GetAdvisorCommitteesRequest' => '\\GetAdvisorCommitteesRequest',
  'advisorCommitteeCodes' => '\\advisorCommitteeCodes',
  'GetAdvisorCommitteesResponse' => '\\GetAdvisorCommitteesResponse',
  'GetProgramsRequest' => '\\GetProgramsRequest',
  'GetProgramsResponse' => '\\GetProgramsResponse',
  'GetStudentGroupsRequest' => '\\GetStudentGroupsRequest',
  'GetStudentGroupsResponse' => '\\GetStudentGroupsResponse',
  'GetAcademicStandingActionsRequest' => '\\GetAcademicStandingActionsRequest',
  'GetAcademicStandingActionsResponse' => '\\GetAcademicStandingActionsResponse',
  'GetStudentServiceIndicatorsRequest' => '\\GetStudentServiceIndicatorsRequest',
  'GetStudentServiceIndicatorsResponse' => '\\GetStudentServiceIndicatorsResponse',
  'personQuery' => '\\personQuery',
  'studentDataOptions' => '\\studentDataOptions',
  'advisingDataOptionsType' => '\\advisingDataOptionsType',
  'droppedStudent' => '\\droppedStudent',
  'addedStudent' => '\\addedStudent',
  'serviceAlertType' => '\\serviceAlertType',
  'serviceAlertsType' => '\\serviceAlertsType',
  'abstractServiceAlertType' => '\\abstractServiceAlertType',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://esbtest.services.wisc.edu/esbv2/CHUB/WebService/chub-ws-1.5/chub.wsdl')
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param GetClassesMeetingWithinBuildingRequest $GetClassesMeetingWithinBuildingRequest
     * @return GetClassesMeetingWithinBuildingResponse
     */
    public function GetClassesMeetingWithinBuilding(GetClassesMeetingWithinBuildingRequest $GetClassesMeetingWithinBuildingRequest)
    {
      return $this->__soapCall('GetClassesMeetingWithinBuilding', array($GetClassesMeetingWithinBuildingRequest));
    }

    /**
     * @param GetStudentGroupsRequest $GetStudentGroupsRequest
     * @return GetStudentGroupsResponse
     */
    public function GetStudentGroups(GetStudentGroupsRequest $GetStudentGroupsRequest)
    {
      return $this->__soapCall('GetStudentGroups', array($GetStudentGroupsRequest));
    }

    /**
     * @param GetCurrentTermsRequest $GetCurrentTermsRequest
     * @return GetCurrentTermsResponse
     */
    public function GetCurrentTerms(GetCurrentTermsRequest $GetCurrentTermsRequest)
    {
      return $this->__soapCall('GetCurrentTerms', array($GetCurrentTermsRequest));
    }

    /**
     * @param GetAvailableAndFutureTermsRequest $GetAvailableAndFutureTermsRequest
     * @return GetAvailableAndFutureTermsResponse
     */
    public function GetAvailableAndFutureTerms(GetAvailableAndFutureTermsRequest $GetAvailableAndFutureTermsRequest)
    {
      return $this->__soapCall('GetAvailableAndFutureTerms', array($GetAvailableAndFutureTermsRequest));
    }

    /**
     * @param GetClassesWithDefinedMaterialsRequest $GetClassesWithDefinedMaterialsRequest
     * @return GetClassesWithDefinedMaterialsResponse
     */
    public function GetClassesWithDefinedMaterials(GetClassesWithDefinedMaterialsRequest $GetClassesWithDefinedMaterialsRequest)
    {
      return $this->__soapCall('GetClassesWithDefinedMaterials', array($GetClassesWithDefinedMaterialsRequest));
    }

    /**
     * @param GetAcademicStandingActionsRequest $GetAcademicStandingActionsRequest
     * @return GetAcademicStandingActionsResponse
     */
    public function GetAcademicStandingActions(GetAcademicStandingActionsRequest $GetAcademicStandingActionsRequest)
    {
      return $this->__soapCall('GetAcademicStandingActions', array($GetAcademicStandingActionsRequest));
    }

    /**
     * @param GetCourseHistoryRequest $GetCourseHistoryRequest
     * @return GetCourseHistoryResponse
     */
    public function GetCourseHistory(GetCourseHistoryRequest $GetCourseHistoryRequest)
    {
      return $this->__soapCall('GetCourseHistory', array($GetCourseHistoryRequest));
    }

    /**
     * @param GetEnrolledClassesRequest $GetEnrolledClassesRequest
     * @return GetEnrolledClassesResponse
     */
    public function GetEnrolledClasses(GetEnrolledClassesRequest $GetEnrolledClassesRequest)
    {
      return $this->__soapCall('GetEnrolledClasses', array($GetEnrolledClassesRequest));
    }

    /**
     * @param GetCourseByCatalogNumberRequest $GetCourseByCatalogNumberRequest
     * @return GetCourseByCatalogNumberResponse
     */
    public function GetCourseByCatalogNumber(GetCourseByCatalogNumberRequest $GetCourseByCatalogNumberRequest)
    {
      return $this->__soapCall('GetCourseByCatalogNumber', array($GetCourseByCatalogNumberRequest));
    }

    /**
     * @param GetClassMeetingsRequest $GetClassMeetingsRequest
     * @return GetClassMeetingsResponse
     */
    public function GetClassMeetings(GetClassMeetingsRequest $GetClassMeetingsRequest)
    {
      return $this->__soapCall('GetClassMeetings', array($GetClassMeetingsRequest));
    }

    /**
     * @param GetCrossListedClassUniqueIdsRequest $GetCrossListedClassUniqueIdsRequest
     * @return GetCrossListedClassUniqueIdsResponse
     */
    public function GetCrossListedClassUniqueIds(GetCrossListedClassUniqueIdsRequest $GetCrossListedClassUniqueIdsRequest)
    {
      return $this->__soapCall('GetCrossListedClassUniqueIds', array($GetCrossListedClassUniqueIdsRequest));
    }

    /**
     * @param GetUniqueSubjectCodesRequest $GetUniqueSubjectCodesRequest
     * @return GetUniqueSubjectCodesResponse
     */
    public function GetUniqueSubjectCodes(GetUniqueSubjectCodesRequest $GetUniqueSubjectCodesRequest)
    {
      return $this->__soapCall('GetUniqueSubjectCodes', array($GetUniqueSubjectCodesRequest));
    }

    /**
     * @param GetStudentEmplidsEnrolledInTermRequest $GetStudentEmplidsEnrolledInTermRequest
     * @return GetStudentEmplidsEnrolledInTermResponse
     */
    public function GetStudentEmplidsEnrolledInTerm(GetStudentEmplidsEnrolledInTermRequest $GetStudentEmplidsEnrolledInTermRequest)
    {
      return $this->__soapCall('GetStudentEmplidsEnrolledInTerm', array($GetStudentEmplidsEnrolledInTermRequest));
    }

    /**
     * @param GetCourseGuideRoadmapsRequest $GetCourseGuideRoadmapsRequest
     * @return GetCourseGuideRoadmapsResponse
     */
    public function GetCourseGuideRoadmaps(GetCourseGuideRoadmapsRequest $GetCourseGuideRoadmapsRequest)
    {
      return $this->__soapCall('GetCourseGuideRoadmaps', array($GetCourseGuideRoadmapsRequest));
    }

    /**
     * @param GetStudentServiceIndicatorsRequest $GetStudentServiceIndicatorsRequest
     * @return GetStudentServiceIndicatorsResponse
     */
    public function GetStudentServiceIndicators(GetStudentServiceIndicatorsRequest $GetStudentServiceIndicatorsRequest)
    {
      return $this->__soapCall('GetStudentServiceIndicators', array($GetStudentServiceIndicatorsRequest));
    }

    /**
     * @param GetClassUniqueIdsRequest $GetClassUniqueIdsRequest
     * @return GetClassUniqueIdsResponse
     */
    public function GetClassUniqueIds(GetClassUniqueIdsRequest $GetClassUniqueIdsRequest)
    {
      return $this->__soapCall('GetClassUniqueIds', array($GetClassUniqueIdsRequest));
    }

    /**
     * @param GetClassRequest $GetClassRequest
     * @return GetClassResponse
     */
    public function GetClass(GetClassRequest $GetClassRequest)
    {
      return $this->__soapCall('GetClass', array($GetClassRequest));
    }

    /**
     * @param GetTermRequest $GetTermRequest
     * @return GetTermResponse
     */
    public function GetTerm(GetTermRequest $GetTermRequest)
    {
      return $this->__soapCall('GetTerm', array($GetTermRequest));
    }

    /**
     * @param GetCourseByCourseIdRequest $GetCourseByCourseIdRequest
     * @return GetCourseByCourseIdResponse
     */
    public function GetCourseByCourseId(GetCourseByCourseIdRequest $GetCourseByCourseIdRequest)
    {
      return $this->__soapCall('GetCourseByCourseId', array($GetCourseByCourseIdRequest));
    }

    /**
     * @param GetAllSchoolCollegesRequest $GetAllSchoolCollegesRequest
     * @return GetAllSchoolCollegesResponse
     */
    public function GetAllSchoolColleges(GetAllSchoolCollegesRequest $GetAllSchoolCollegesRequest)
    {
      return $this->__soapCall('GetAllSchoolColleges', array($GetAllSchoolCollegesRequest));
    }

    /**
     * @param GetUniqueClassAttributesInTermRequest $GetUniqueClassAttributesInTermRequest
     * @return GetUniqueClassAttributesInTermResponse
     */
    public function GetUniqueClassAttributesInTerm(GetUniqueClassAttributesInTermRequest $GetUniqueClassAttributesInTermRequest)
    {
      return $this->__soapCall('GetUniqueClassAttributesInTerm', array($GetUniqueClassAttributesInTermRequest));
    }

    /**
     * @param GetClassRosterRequest $GetClassRosterRequest
     * @return GetClassRosterResponse
     */
    public function GetClassRoster(GetClassRosterRequest $GetClassRosterRequest)
    {
      return $this->__soapCall('GetClassRoster', array($GetClassRosterRequest));
    }

    /**
     * @param GetSessionsInTermRequest $GetSessionsInTermRequest
     * @return GetSessionsInTermResponse
     */
    public function GetSessionsInTerm(GetSessionsInTermRequest $GetSessionsInTermRequest)
    {
      return $this->__soapCall('GetSessionsInTerm', array($GetSessionsInTermRequest));
    }

    /**
     * @param GetStudentsThatHaveAddedRequest $GetStudentsThatHaveAddedRequest
     * @return GetStudentsThatHaveAddedResponse
     */
    public function GetStudentsThatHaveAdded(GetStudentsThatHaveAddedRequest $GetStudentsThatHaveAddedRequest)
    {
      return $this->__soapCall('GetStudentsThatHaveAdded', array($GetStudentsThatHaveAddedRequest));
    }

    /**
     * @param GetSubjectsInTermRequest $GetSubjectsInTermRequest
     * @return GetSubjectsInTermResponse
     */
    public function GetSubjectsInTerm(GetSubjectsInTermRequest $GetSubjectsInTermRequest)
    {
      return $this->__soapCall('GetSubjectsInTerm', array($GetSubjectsInTermRequest));
    }

    /**
     * @param GetInstructorAffiliationsForCourseRequest $GetInstructorAffiliationsForCourseRequest
     * @return GetInstructorAffiliationsForCourseResponse
     */
    public function GetInstructorAffiliationsForCourse(GetInstructorAffiliationsForCourseRequest $GetInstructorAffiliationsForCourseRequest)
    {
      return $this->__soapCall('GetInstructorAffiliationsForCourse', array($GetInstructorAffiliationsForCourseRequest));
    }

    /**
     * @param GetSubjectsInstructorIsTeachingRequest $GetSubjectsInstructorIsTeachingRequest
     * @return GetSubjectsInstructorIsTeachingResponse
     */
    public function GetSubjectsInstructorIsTeaching(GetSubjectsInstructorIsTeachingRequest $GetSubjectsInstructorIsTeachingRequest)
    {
      return $this->__soapCall('GetSubjectsInstructorIsTeaching', array($GetSubjectsInstructorIsTeachingRequest));
    }

    /**
     * @param GetInstructorAffiliationsRequest $GetInstructorAffiliationsRequest
     * @return GetInstructorAffiliationsResponse
     */
    public function GetInstructorAffiliations(GetInstructorAffiliationsRequest $GetInstructorAffiliationsRequest)
    {
      return $this->__soapCall('GetInstructorAffiliations', array($GetInstructorAffiliationsRequest));
    }

    /**
     * @param GetClassMaterialsURIForCourseRequest $GetClassMaterialsURIForCourseRequest
     * @return GetClassMaterialsURIForCourseResponse
     */
    public function GetClassMaterialsURIForCourse(GetClassMaterialsURIForCourseRequest $GetClassMaterialsURIForCourseRequest)
    {
      return $this->__soapCall('GetClassMaterialsURIForCourse', array($GetClassMaterialsURIForCourseRequest));
    }

    /**
     * @param GetInstructorProvidedClassDetailsRequest $GetInstructorProvidedClassDetailsRequest
     * @return GetInstructorProvidedClassDetailsResponse
     */
    public function GetInstructorProvidedClassDetails(GetInstructorProvidedClassDetailsRequest $GetInstructorProvidedClassDetailsRequest)
    {
      return $this->__soapCall('GetInstructorProvidedClassDetails', array($GetInstructorProvidedClassDetailsRequest));
    }

    /**
     * @param GetStudentsThatHaveDroppedRequest $GetStudentsThatHaveDroppedRequest
     * @return GetStudentsThatHaveDroppedResponse
     */
    public function GetStudentsThatHaveDropped(GetStudentsThatHaveDroppedRequest $GetStudentsThatHaveDroppedRequest)
    {
      return $this->__soapCall('GetStudentsThatHaveDropped', array($GetStudentsThatHaveDroppedRequest));
    }

    /**
     * @param GetCourseGuidePrimaryRoadmapCoursesRequest $GetCourseGuidePrimaryRoadmapCoursesRequest
     * @return GetCourseGuidePrimaryRoadmapCoursesResponse
     */
    public function GetCourseGuidePrimaryRoadmapCourses(GetCourseGuidePrimaryRoadmapCoursesRequest $GetCourseGuidePrimaryRoadmapCoursesRequest)
    {
      return $this->__soapCall('GetCourseGuidePrimaryRoadmapCourses', array($GetCourseGuidePrimaryRoadmapCoursesRequest));
    }

    /**
     * @param GetCombinedClassRosterRequest $GetCombinedClassRosterRequest
     * @return GetCombinedClassRosterResponse
     */
    public function GetCombinedClassRoster(GetCombinedClassRosterRequest $GetCombinedClassRosterRequest)
    {
      return $this->__soapCall('GetCombinedClassRoster', array($GetCombinedClassRosterRequest));
    }

    /**
     * @param GetUniqueClassInstructionModesInTermRequest $GetUniqueClassInstructionModesInTermRequest
     * @return GetUniqueClassInstructionModesInTermResponse
     */
    public function GetUniqueClassInstructionModesInTerm(GetUniqueClassInstructionModesInTermRequest $GetUniqueClassInstructionModesInTermRequest)
    {
      return $this->__soapCall('GetUniqueClassInstructionModesInTerm', array($GetUniqueClassInstructionModesInTermRequest));
    }

    /**
     * @param IsCrossListedRequest $IsCrossListedRequest
     * @return IsCrossListedResponse
     */
    public function IsCrossListed(IsCrossListedRequest $IsCrossListedRequest)
    {
      return $this->__soapCall('IsCrossListed', array($IsCrossListedRequest));
    }

    /**
     * @param GetAdvisorsRequest $GetAdvisorsRequest
     * @return GetAdvisorsResponse
     */
    public function GetAdvisors(GetAdvisorsRequest $GetAdvisorsRequest)
    {
      return $this->__soapCall('GetAdvisors', array($GetAdvisorsRequest));
    }

    /**
     * @param GetClassMaterialsForCourseRequest $GetClassMaterialsForCourseRequest
     * @return GetClassMaterialsForCourseResponse
     */
    public function GetClassMaterialsForCourse(GetClassMaterialsForCourseRequest $GetClassMaterialsForCourseRequest)
    {
      return $this->__soapCall('GetClassMaterialsForCourse', array($GetClassMaterialsForCourseRequest));
    }

    /**
     * @param GetInstructorAffiliationClassesForCourseRequest $GetInstructorAffiliationClassesForCourseRequest
     * @return GetInstructorAffiliationClassesForCourseResponse
     */
    public function GetInstructorAffiliationClassesForCourse(GetInstructorAffiliationClassesForCourseRequest $GetInstructorAffiliationClassesForCourseRequest)
    {
      return $this->__soapCall('GetInstructorAffiliationClassesForCourse', array($GetInstructorAffiliationClassesForCourseRequest));
    }

    /**
     * @param GetCourseWithCrossListedSubjectsRequest $GetCourseWithCrossListedSubjectsRequest
     * @return GetCourseWithCrossListedSubjectsResponse
     */
    public function GetCourseWithCrossListedSubjects(GetCourseWithCrossListedSubjectsRequest $GetCourseWithCrossListedSubjectsRequest)
    {
      return $this->__soapCall('GetCourseWithCrossListedSubjects', array($GetCourseWithCrossListedSubjectsRequest));
    }

    /**
     * @param GetProgramsRequest $GetProgramsRequest
     * @return GetProgramsResponse
     */
    public function GetPrograms(GetProgramsRequest $GetProgramsRequest)
    {
      return $this->__soapCall('GetPrograms', array($GetProgramsRequest));
    }

    /**
     * @param GetCrossListedClassesRequest $GetCrossListedClassesRequest
     * @return GetCrossListedClassesResponse
     */
    public function GetCrossListedClasses(GetCrossListedClassesRequest $GetCrossListedClassesRequest)
    {
      return $this->__soapCall('GetCrossListedClasses', array($GetCrossListedClassesRequest));
    }

    /**
     * @param GetPresentTermRequest $GetPresentTermRequest
     * @return GetPresentTermResponse
     */
    public function GetPresentTerm(GetPresentTermRequest $GetPresentTermRequest)
    {
      return $this->__soapCall('GetPresentTerm', array($GetPresentTermRequest));
    }

    /**
     * @param GetStudentsRequest $GetStudentsRequest
     * @return GetStudentsResponse
     */
    public function GetStudents(GetStudentsRequest $GetStudentsRequest)
    {
      return $this->__soapCall('GetStudents', array($GetStudentsRequest));
    }

    /**
     * @param GetInstructorProvidedClassDetailsForCourseRequest $GetInstructorProvidedClassDetailsForCourseRequest
     * @return GetInstructorProvidedClassDetailsForCourseResponse
     */
    public function GetInstructorProvidedClassDetailsForCourse(GetInstructorProvidedClassDetailsForCourseRequest $GetInstructorProvidedClassDetailsForCourseRequest)
    {
      return $this->__soapCall('GetInstructorProvidedClassDetailsForCourse', array($GetInstructorProvidedClassDetailsForCourseRequest));
    }

    /**
     * @param GetClassMaterialsURIForCourseByCatalogNumberRequest $GetClassMaterialsURIForCourseByCatalogNumberRequest
     * @return GetClassMaterialsURIForCourseByCatalogNumberResponse
     */
    public function GetClassMaterialsURIForCourseByCatalogNumber(GetClassMaterialsURIForCourseByCatalogNumberRequest $GetClassMaterialsURIForCourseByCatalogNumberRequest)
    {
      return $this->__soapCall('GetClassMaterialsURIForCourseByCatalogNumber', array($GetClassMaterialsURIForCourseByCatalogNumberRequest));
    }

    /**
     * @param GetSubjectRequest $GetSubjectRequest
     * @return GetSubjectResponse
     */
    public function GetSubject(GetSubjectRequest $GetSubjectRequest)
    {
      return $this->__soapCall('GetSubject', array($GetSubjectRequest));
    }

    /**
     * @param GetCourseHistoryByCatalogNumberRequest $GetCourseHistoryByCatalogNumberRequest
     * @return GetCourseHistoryByCatalogNumberResponse
     */
    public function GetCourseHistoryByCatalogNumber(GetCourseHistoryByCatalogNumberRequest $GetCourseHistoryByCatalogNumberRequest)
    {
      return $this->__soapCall('GetCourseHistoryByCatalogNumber', array($GetCourseHistoryByCatalogNumberRequest));
    }

    /**
     * @param GetNonTeachingInstructorsRequest $GetNonTeachingInstructorsRequest
     * @return GetNonTeachingInstructorsResponse
     */
    public function GetNonTeachingInstructors(GetNonTeachingInstructorsRequest $GetNonTeachingInstructorsRequest)
    {
      return $this->__soapCall('GetNonTeachingInstructors', array($GetNonTeachingInstructorsRequest));
    }

    /**
     * @param GetUniqueSubjectCodesByAcademicOrgRequest $GetUniqueSubjectCodesByAcademicOrgRequest
     * @return GetUniqueSubjectCodesByAcademicOrgResponse
     */
    public function GetUniqueSubjectCodesByAcademicOrg(GetUniqueSubjectCodesByAcademicOrgRequest $GetUniqueSubjectCodesByAcademicOrgRequest)
    {
      return $this->__soapCall('GetUniqueSubjectCodesByAcademicOrg', array($GetUniqueSubjectCodesByAcademicOrgRequest));
    }

    /**
     * @param GetCourseGuideRoadmapCoursesRequest $GetCourseGuideRoadmapCoursesRequest
     * @return GetCourseGuideRoadmapCoursesResponse
     */
    public function GetCourseGuideRoadmapCourses(GetCourseGuideRoadmapCoursesRequest $GetCourseGuideRoadmapCoursesRequest)
    {
      return $this->__soapCall('GetCourseGuideRoadmapCourses', array($GetCourseGuideRoadmapCoursesRequest));
    }

    /**
     * @param GetInstructorAffiliationsForTeacherRequest $GetInstructorAffiliationsForTeacherRequest
     * @return GetInstructorAffiliationsForTeacherResponse
     */
    public function GetInstructorAffiliationsForTeacher(GetInstructorAffiliationsForTeacherRequest $GetInstructorAffiliationsForTeacherRequest)
    {
      return $this->__soapCall('GetInstructorAffiliationsForTeacher', array($GetInstructorAffiliationsForTeacherRequest));
    }

    /**
     * @param GetCoursesBySubjectRequest $GetCoursesBySubjectRequest
     * @return GetCoursesBySubjectResponse
     */
    public function GetCoursesBySubject(GetCoursesBySubjectRequest $GetCoursesBySubjectRequest)
    {
      return $this->__soapCall('GetCoursesBySubject', array($GetCoursesBySubjectRequest));
    }

    /**
     * @param GetEnrolledInstructorAffiliationClassesRequest $GetEnrolledInstructorAffiliationClassesRequest
     * @return GetEnrolledInstructorAffiliationClassesResponse
     */
    public function GetEnrolledInstructorAffiliationClasses(GetEnrolledInstructorAffiliationClassesRequest $GetEnrolledInstructorAffiliationClassesRequest)
    {
      return $this->__soapCall('GetEnrolledInstructorAffiliationClasses', array($GetEnrolledInstructorAffiliationClassesRequest));
    }

    /**
     * @param GetInstructorAffiliationClassesForTeacherRequest $GetInstructorAffiliationClassesForTeacherRequest
     * @return GetInstructorAffiliationClassesForTeacherResponse
     */
    public function GetInstructorAffiliationClassesForTeacher(GetInstructorAffiliationClassesForTeacherRequest $GetInstructorAffiliationClassesForTeacherRequest)
    {
      return $this->__soapCall('GetInstructorAffiliationClassesForTeacher', array($GetInstructorAffiliationClassesForTeacherRequest));
    }

    /**
     * @param GetAdvisorCommitteesRequest $GetAdvisorCommitteesRequest
     * @return GetAdvisorCommitteesResponse
     */
    public function GetAdvisorCommittees(GetAdvisorCommitteesRequest $GetAdvisorCommitteesRequest)
    {
      return $this->__soapCall('GetAdvisorCommittees', array($GetAdvisorCommitteesRequest));
    }

    /**
     * @param GetCrossListedSubjectsRequest $GetCrossListedSubjectsRequest
     * @return GetCrossListedSubjectsResponse
     */
    public function GetCrossListedSubjects(GetCrossListedSubjectsRequest $GetCrossListedSubjectsRequest)
    {
      return $this->__soapCall('GetCrossListedSubjects', array($GetCrossListedSubjectsRequest));
    }

    /**
     * @param GetEnrolledClassUniqueIdsRequest $GetEnrolledClassUniqueIdsRequest
     * @return GetEnrolledClassUniqueIdsResponse
     */
    public function GetEnrolledClassUniqueIds(GetEnrolledClassUniqueIdsRequest $GetEnrolledClassUniqueIdsRequest)
    {
      return $this->__soapCall('GetEnrolledClassUniqueIds', array($GetEnrolledClassUniqueIdsRequest));
    }

    /**
     * @param GetClassesRequest $GetClassesRequest
     * @return GetClassesResponse
     */
    public function GetClasses(GetClassesRequest $GetClassesRequest)
    {
      return $this->__soapCall('GetClasses', array($GetClassesRequest));
    }

    /**
     * @param GetAvailableTermsRequest $GetAvailableTermsRequest
     * @return GetAvailableTermsResponse
     */
    public function GetAvailableTerms(GetAvailableTermsRequest $GetAvailableTermsRequest)
    {
      return $this->__soapCall('GetAvailableTerms', array($GetAvailableTermsRequest));
    }

    /**
     * @param GetClassMaterialsURIRequest $GetClassMaterialsURIRequest
     * @return GetClassMaterialsURIResponse
     */
    public function GetClassMaterialsURI(GetClassMaterialsURIRequest $GetClassMaterialsURIRequest)
    {
      return $this->__soapCall('GetClassMaterialsURI', array($GetClassMaterialsURIRequest));
    }

    /**
     * @param GetInstructorsByPrimaryTeachingOrgRequest $GetInstructorsByPrimaryTeachingOrgRequest
     * @return GetInstructorsByPrimaryTeachingOrgResponse
     */
    public function GetInstructorsByPrimaryTeachingOrg(GetInstructorsByPrimaryTeachingOrgRequest $GetInstructorsByPrimaryTeachingOrgRequest)
    {
      return $this->__soapCall('GetInstructorsByPrimaryTeachingOrg', array($GetInstructorsByPrimaryTeachingOrgRequest));
    }

    /**
     * @param GetTermLastUpdatedRequest $GetTermLastUpdatedRequest
     * @return GetTermLastUpdatedResponse
     */
    public function GetTermLastUpdated(GetTermLastUpdatedRequest $GetTermLastUpdatedRequest)
    {
      return $this->__soapCall('GetTermLastUpdated', array($GetTermLastUpdatedRequest));
    }

    /**
     * @param GetCourseIdsBySubjectRequest $GetCourseIdsBySubjectRequest
     * @return GetCourseIdsBySubjectResponse
     */
    public function GetCourseIdsBySubject(GetCourseIdsBySubjectRequest $GetCourseIdsBySubjectRequest)
    {
      return $this->__soapCall('GetCourseIdsBySubject', array($GetCourseIdsBySubjectRequest));
    }

    /**
     * @param GetEnrollmentPackagesRequest $GetEnrollmentPackagesRequest
     * @return GetEnrollmentPackagesResponse
     */
    public function GetEnrollmentPackages(GetEnrollmentPackagesRequest $GetEnrollmentPackagesRequest)
    {
      return $this->__soapCall('GetEnrollmentPackages', array($GetEnrollmentPackagesRequest));
    }

    /**
     * @param GetClassMaterialsRequest $GetClassMaterialsRequest
     * @return GetClassMaterialsResponse
     */
    public function GetClassMaterials(GetClassMaterialsRequest $GetClassMaterialsRequest)
    {
      return $this->__soapCall('GetClassMaterials', array($GetClassMaterialsRequest));
    }

}
